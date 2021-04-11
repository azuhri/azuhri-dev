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

    public function getData()
    {
        $banner = Word::all();
        if(count($banner) < 1) {
            return 0;
        }
        return json_encode($banner);
    }

    public function ajax(Request $req)
    {   
    //     $all = $req->all();
    //     if($req->word == NULL || $req->time == NULL ) {
    //         echo "<div class='err'>
    //                     <div class='alert alert-danger' role='alert'>
    //                         <span>Masukan data terlebih dahulu</span>
    //                         <span><i class='fas fa-window-close'></i></span>
    //                     </div>
    //                 </div>";    
    //     }
    //     $data = [
    //         "word" => $req->word,
    //         "typing_time" => $req->time,
    //     ];
    //     Word::insert($data);
    //     echo "<div class='err'>
    //     <div class='alert alert-success' role='alert'>
    //         <span>Berhasil menambah kata</span>
    //         <span><i class='fas fa-window-close'></i></span>
    //     </div>
    // </div>";
        $result['pesan'] = "";
        if($req->word == NULL && $req->time == NULL) {
            $result['pesan'] = "<div class='err'>
                                <div class='alert alert-danger' role='alert'>
                                    <span>Masukan data terlebih dahulu!</span>
                                    <span><i class='fas fa-window-close'></i></span>
                                 </div>
                             </div>";  
        } elseif($req->time == NULL) {
            $result['pesan'] = "<div class='err'>
                                <div class='alert alert-danger' role='alert'>
                                    <span>Masukan time typing</span>
                                    <span><i class='fas fa-window-close'></i></span>
                                 </div>
                             </div>";  
        }elseif($req->word == NULL) {
            $result['pesan'] = "<div class='err'>
                                <div class='alert alert-danger' role='alert'>
                                    <span>Masukan kata!</span>
                                    <span><i class='fas fa-window-close'></i></span>
                                </div>
                                </div>";  
        } else {
            $result['pesan'] = "<div class='err'>
                                <div class='alert alert-success' role='alert'>
                                    <span>Data berhasil disimpan</span>
                                    <span><i class='fas fa-window-close'></i></span>
                                </div>
                                </div>"; 
            $input = $req->all();
            Word::insert([
                'word' => $input['word'],
                'typing_time' => $input['time']
            ]);
        }
        return json_encode($result);
    }

    public function update(Request $req, $id)
    {
        $result['pesan'] = "";
        if($req->word == NULL) {
            $result['pesan'] = "<div class='err'>
                                    <div class='alert alert-danger' role='alert'>
                                        <span>Masukan kata!</span>
                                        <span><i class='fas fa-window-close'></i></span>
                                    </div>
                                </div>";  
        } else {
            Word::findOrFail($id)->update([
                "word" => $req->word
            ]);
            $result['pesan'] = "<div class='err'>
                                <div class='alert alert-success' role='alert'>
                                    <span>Data berhasil disimpan</span>
                                    <span><i class='fas fa-window-close'></i></span>
                                </div>
                                </div>";
        }

        return json_encode($result);
    }

    public function del($id)
    {
        $word = Word::findOrFail($id);
        $word->delete();

        return redirect()->back()->with('success_created', 'Kata '. $word->word." berhasil dihapus!");
    }
}
