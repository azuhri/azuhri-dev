<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Faker\Factory as fake;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
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
