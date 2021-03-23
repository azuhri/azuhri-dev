@extends('backend.component.template')
@section('title')
@php
    $user = session('user');
    $admin = App\Models\Admin::where('uuid', $user->uuid)->first();
@endphp
    Setting | {{$admin->username}}
@endsection
@section('content')
    <div class="settings">
        <div class="coverSetting">
            <div class="layer1">
                <span id="title">Settings Page : {{$admin->username}}</span>
                <div class="iconPassword">
                    <button>
                        <i class="fas fa-exchange-alt"></i>
                        <span>change password</span>
                    </button>
                </div>
            </div>
            <div class="layer2">
                <form action="{{route('back.setting.update')}}" method="POST" enctype="multipart/form-data">
                    @include('component.message')
                    @csrf
                    <input type="hidden" value="{{$admin->uuid}}" name="uuid">
                    <div class="avatars">
                        <div class="imgAvatar">
                            @if ($admin->avatar)
                                <img src="{{asset($admin->avatar)}}" alt="">
                            @else
                                <img src="{{asset('assets/nopict.png')}}" alt="">
                            @endif
                        </div>
                        <input type="file" name="avatar" id="avatar" >
                        <label for="avatar">upload foto</label>
                    </div>
                    <div class="inputUsername">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="inputEmail">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="coverInputPass">
                        <div class="inputPassOld">
                            <label for="oldpass">Current Password</label>
                            <input type="password" name="oldpass" id="oldpass" value="">
                        </div>
                        <div class="inputNewPass">
                            <label for="newpass">New Password</label>
                            <input type="password" name="newpass" id="newpass" value="">
                        </div>
                    </div>
                    <div class="btnSubmit">
                        <a href="">cancel</a>
                        <button>save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script>
$(document).ready(function() {
    
    // Data input
    $('.inputUsername input').val('{{$admin->username}}');
    $('.inputEmail input').val('{{$admin->email}}');
    
    $('.iconPassword button').click(function(){
        $('.coverInputPass').toggleClass("slideDowning");
    })

})
</script>
@endpush
@section('style')
<style>

    .settings {
        padding: 0 2rem;
        display: flex;
        margin-bottom: 3rem
    }

    .coverSetting {
        display: flex;
        flex-direction: column;
        width: 100%;
        border-radius: 0.5rem;
        box-shadow: 0 0 5px 1px #c1c1c1;
    }

    .coverSetting .layer1 {
        display: flex;
        background: linear-gradient(to right, #ed239f 0%, #474ad0 51%, #ed239f 100%);
        color: white;
        padding: 0.5rem;
        border-top-left-radius: 0.4rem;
        border-top-right-radius: 0.4rem;
        justify-content: center
    }

    .coverSetting .layer1 #title {
        width: 50%;
        display: flex;
        align-items: center;
        margin-left: 1rem;
        font-weight: bold;
        color: #ffa4ff;
    }

    .iconPassword {
        display: flex;
        width: 50%;
        justify-content: flex-end
    }

    .iconPassword button {
        display: flex;
        width: 25%;
        align-items: center;
        padding: 0.5rem;
        border-radius: 0.3rem;
        background-color: #824dec;
        border: none;
        box-shadow: 0 0 5px 1px #686868;
        color: white;
        font-weight: bold;
        border: none;
        transition: 0.5s;
        outline: none;
        position: relative
    }

    .iconPassword button:hover {
        transition: 0.5s;
        background-color: #6235bd;
        bottom: 2px
    }

    .iconPassword button * {
        display: flex;
        justify-content: center
    }

    .iconPassword button i {
        width: 20%
    }


    .iconPassword button span {
        width: 80%
    }

    .coverSetting .layer2 {
        display: flex;
        padding: 2rem;
        background-color: white;
        border-bottom-right-radius: 0.4rem;
        border-bottom-left-radius: 0.4rem;
    }

    .coverSetting form {
        display: flex;
        flex-direction: column;
        width: 100%;
        position: relative;
    }

    .inputPassOld, .inputNewPass {
        transition: 0.5s;
    }

    .inputUsername, .inputEmail {
        z-index: 99999!important
    }


    .coverInputPass {
        margin-top: -11rem!important;
        opacity: 0;
        transition: 0.5s;
        position: relative
    }

    .slideDowning {
        margin-top: 0rem!important;
        opacity: 1!important;
        transition: 0.5s;
        z-index: 0;
    }

    .coverSetting form div {
        display: flex;
        flex-direction: column;
        margin: 0.5rem 0;
        width: 100%;
        position: relative;
        z-index: 2;

    }

    .coverSetting form label {
        margin-bottom: 0
    }

    .coverSetting input {
        width: 100%;
        width: 100%;
        padding: 0.7rem;
        font-size: 1rem;
        font-family: 'Quicksand';
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #9238ba;
        outline: none;
        color: gray;
        font-weight: 500;
    }

    .avatars {
        justify-content: center;
        align-items: center
    }

    .avatars input {
        display: none
    }

    .avatars label {
        cursor: pointer;
        margin: 0.5rem 0;
        background-color: #ed239f;
        color: white;
        border-radius: 0.3rem;
        width: 120px;
        text-align: center;
        padding: 0.3rem;
        font-weight: bold;
    }

    .imgAvatar {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .imgAvatar img {
        width:300px;
        height: 300px;
        border-radius: 50%;
    }

    .btnSubmit {
        flex-direction: row!important;
        margin: 2rem 0!important;
        justify-content: flex-end
    }

    .btnSubmit a, .btnSubmit button {
        width: 75px;
        padding: 0.3rem 0;
        border-radius: 0.2rem;
        border: none;

    }

    .btnSubmit a {
        text-decoration: none;
        text-align: center;
        color: white;
        background-color: #ec4d63;
        margin-right: 0.5rem
    }

    .btnSubmit button {
        background-color: dodgerblue;
        color: white
    }

    

</style>
@endsection