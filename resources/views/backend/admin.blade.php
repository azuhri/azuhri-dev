@extends('component.template')
@section('title')
    admin
@endsection
@section('content')
    <div class="logins">
        <form action="{{route('back.sitemin.login')}}" method="POST">
            <div class="layer1">
                <div class="imgLogin">
                    <img src="{{asset('favicon.png')}}" alt="">
                </div>
                <span>azuhri-dev</span>
            </div>
            <div class="layer2">
                @csrf
                @include('component.message')
                <div class="inputEmail">
                    <label for="emails">Email</label>
                    <input type="email" name="email" id="emails" required>
                </div>
                <div class="pass">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" required>
                </div>
                <div class="btnLogin">
                    <button>Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('style')
<style>
    .logins {
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        /* background: linear-gradient(to right, #ed239f 0%, #474ad0 51%, #ed239f 100%); */

    }

    .logins form {
        transition: 0.5s;
        width: 30%;
        border-radius: 0.5rem;
        position: relative
    }

    .logins form:hover {
        box-shadow: 0 0 6px 1px #c8c8c8;
        transition: 0.5s;
        bottom: 3px
    }


    .logins .layer1 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .logins .imgLogin {
        display: flex;
        width: 100%;
        justify-content: center
    }

    .layer1 .imgLogin img {
        width: 100px;
        padding: 1rem;
        border: 2px solid #ed239f;
        margin-top: 5rem;
        border-radius: 50%;
    }

    .layer1 span {
        font-size: 2rem;
        font-family: 'Poppins';
        background: -webkit-linear-gradient(#ed239f, #474ad0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .logins .layer2 {
        display: flex;
        flex-direction: column;
        padding: 2rem
    }

    .layer2 div {
        display: flex;
        flex-direction: column;
        margin: 0.5rem 0
    }

    .layer2 label {
        font-size: 1rem;
        font-family: 'Poppins';
    }

    .layer2 input {
        padding: 0.8rem 1rem;
        font-size: 1rem;
        color:gray;
        font-family: 'Poppins'
    }

    .btnLogin button{
        display: flex;
        padding: 1rem;
        border-radius: 0.5rem;
        color: white;
        transition: 0.5s;
        color: #ed239f;
        border: 1px solid #ed239f!important;
        border: none;
        display: flex;
        justify-content: center;
        font-size: 1.2rem;
        background-color: white
    }
    
    .btnLogin button:hover {
        transition: 0.5s;
        background-color: #ed239f;
        /* background: -webkit-radial-gradient(#ed239f, #474ad0); */
        border: 1px solid #ffffff!important;
        color: white
    }

    .err {
        text-align: center;
        font-size: 1rem;
    }
</style>
@endsection