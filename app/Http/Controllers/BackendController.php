<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Faker\Factory as fake;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect()->route('back.sitemin');
    }
    
    public function setting()
    {
        return view('backend.general-setting.setting');
    }
    
    public function updateSetting(Request $req)
    {
        // dd($req->all());
        $admin = Admin::where('uuid', $req->uuid)->first();
        if($admin) {
            if($req->oldpass || $req->newpass){
                if(Hash::check($req->oldpass, $admin->password)) {
                    $data = [
                        'username' => $req->username ,
                        'email' => $req->email,
                        'password' => bcrypt($req->newpass),
                    ];
                    if($req->avatar != NULL) {
                        $avatar = $req->avatar;
                        $ava_name = $admin->uuid.'-avatar' . "." . $avatar->extension();
                        $link_ava = 'storage/avatar/'.$ava_name;
                        if(file_exists(public_path($admin->avatar))){
                            unlink(public_path($admin->avatar));

                        }
                        // $avatar->storeAs('avatar', $ava_name, 'public');
                        $avatar_resize = Image::make($avatar->getRealPath());
                        $avatar_resize->resize(100,100);
                        $avatar_resize->save(storage_path('app/public/avatar' . $ava_name));
                        $data = [
                            'username' => $req->username ,
                            'email' => $req->email,
                            'password' => bcrypt($req->newpass),
                            'avatar' => $link_ava
                        ];
                    }
                    if($req->newpass == NULL){
                        return redirect()->back()->with('was_created', 'Password baru tidak boleh kosong!');
                    }
                    Admin::find($admin->id)->update($data);
                    return redirect()->back()->with('success_created', 'Data '.$admin->username.' sudah diperbarui!');
                } else {
                    return redirect()->back()->with('was_created', 'Password lama '.$admin->username.' salah!');
                }
            } else {
                if($req->avatar != NULL) {
                    $avatar = $req->avatar;
                    $ava_name = $admin->uuid.'-avatar'.".".$avatar->extension();
                    $link_ava = 'storage/avatar/'.$ava_name;
                    if(file_exists(public_path($admin->avatar))){
                        unlink(public_path($admin->avatar));
                    }
                    // $avatar->storeAs('avatar', $ava_name, 'public');
                    $avatar_resize = Image::make($avatar->getRealPath());
                    $avatar_resize->resize(300,300);
                    $avatar_resize->save(storage_path('app/public/avatar/' . $ava_name));
                    $data = [
                        'username' => $req->username ,
                        'email' => $req->email,
                        'avatar' => $link_ava
                    ];
                    Admin::find($admin->id)->update($data);
                    return redirect()->back()->with('success_created', 'Data '.$admin->username.' sudah diperbarui!');
                }
                $data = [
                    'username' => $req->username ,
                    'email' => $req->email,
                ];
                Admin::find($admin->id)->update($data);
                return redirect()->back()->with('success_created', 'Data '.$admin->username.' sudah diperbarui!');
            }
        }
        
    }
}
