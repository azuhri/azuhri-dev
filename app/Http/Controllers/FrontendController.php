<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\BannerWord as Word;
use Faker\Factory as fake;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function home()
    {
        $words = Word::all();
        return view('frontend.home', compact('words'));
    }

    public function testing()
    {
        return view('frontend.testing');
    }

    public function login()
    {
        return view('backend.admin');
    }

    public function admin(Request $req)
    {
        $authentication = Admin::where('email', $req->email)->first();
        $username = $authentication->email;
        if($authentication || $username) {
            if(Hash::check($req->pass, $authentication->password)) {
                session(['success_signin' => true]);
                session(['user' => $authentication]);
                return redirect()->route('back.dash');
            } else {
                return redirect()->back()->with('was_created', 'Password Anda salah!' );
            }
        } else {
            return redirect()->back()->with('was_created', 'Email tidak terdaftar' );
        }
    }
}
