<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerWord as Word;

class WebComponentController extends Controller
{
    public function bannerWords()
    {
        return view('backend.web-components.banner_words');
    }

    public function ajax(Request $req)
    {   
        $all = $req->all();
        if($req->word == NULL || $req->time == NULL ) {
            return "<div class='err'>
                        <div class='alert alert-danger' role='alert'>
                            <span>Masukan data terlebih dahulu</span>
                            <span><i class='fas fa-window-close'></i></span>
                        </div>
                    </div>";    
        }
        $data = [
            "word" => $req->word,
            "typing_time" => $req->time,
        ];
        Word::insert($data);
        return "<div class='err'>
        <div class='alert alert-success' role='alert'>
            <span>Berhasil menambah kata</span>
            <span><i class='fas fa-window-close'></i></span>
        </div>
    </div>";
    }
}
