@extends('backend.component.template')
@section('title')
    @php
        $user = session('user');
        $admin = App\Models\Admin::where('uuid', $user->uuid)->first();
    @endphp
    Banner Words | {{$admin->username}}
@endsection
@section('content')
    <div class="bannerWords">
        <div class="coverBanner">
            <div class="layer1">
                <span>Banner Words</span>
                <div class="addWord">
                    <button><i class="fas fa-plus-square"></i></button>
                </div>
            </div>
            <div class="layer2">
                <span>WORDS</span>
                <span>ACTION</span>
            </div>
            <div class="layer3">
                <div class="coverLayer3">
                    <div>
                        <span>SOFTWARE ENGINNER</span>
                        <div class="btnActions">
                            <i class="fas fa-pencil-alt"></i>
                            <i class="fas fa-trash-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modalForm">
        <form>
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Word Banner</label>
              <input type="text" name="word" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter banner words">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Typing Time</label>
                <input min="1000" type="number" name="time" class="form-control" id="exampleInputPassword1" placeholder="Enter typing time">
                <span class="explan">How manny second to typing banner words.</span>
            </div>
            <div class="btnForm">
                <span id="canseling">Cancel</span>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
@endsection
@push('script')
<script>
$(document).ready(function(){
    // var url = "https://api.github.com/users/petanikode";
    // $('#result').click(function(){
    //     $.get(url, function(data, status) {
    //         $('#img').attr("src", data.avatar_url);
    //         $('#name').text(data.name);
    //         $('#loc').text(data.location);
    //     })
    // })
 
    $('.data').load("data.php");

    $('.addWord button').click(function(){
        $('.modalForm').addClass('visible');
        $('.modalForm form').addClass('scales');
    })

    $('#canseling').click(function(){
        $('.modalForm').removeClass('visible');
        $('.modalForm form').removeClass('scales');
    })

    $('.btnForm button').click(function(e){
        var input = $('.modalForm form').serialize();
        e.preventDefault();
        var url = "{{route('back.banner-words.ajax')}}";
        $.ajax({
            method: "POST",
            url: url,
            data: input,
            cache: false,
            success: function(data) {
                // alert(data);
                $(".modalForm form").prepend(data);
                $('.modalForm input').val("");
                $.get(url, function(data2) {
                    $(".modalForm form").prepend(data);
                })
                $('.err i').click(function(){
                    $('.err').hide();
                });
            }
        })
    })

        
});
</script>
@endpush
@section('style')
<style>
    .bannerWords {
        padding: 0 2rem;
        margin-bottom: 3rem;
    }
    
    .coverBanner {
        border-radius: 0.5rem;
        box-shadow: 0 0 5px 1px #c1c1c1;
        display: flex;
        flex-direction: column;

    }

    .bannerWords .layer1 {
        display: flex;
        background: linear-gradient(to right, #ed239f 0%, #474ad0 51%, #ed239f 100%);
        padding: 1rem;
        border-top-left-radius: 0.4rem;
        border-top-right-radius: 0.4rem;
    }

    .bannerWords .layer1 span {
        margin-left: 1rem;
        font-weight: bold;
        color: #ffa4ff;
        width: 50%;
        display: flex;
        align-items: center
    }

    .bannerWords .addWord {
        display: flex;
        justify-content: flex-end;
        width: 50%;
        position: relative
    }

    .addWord button:hover {
        transition: 0.5s;
        background-color: #6235bd;
        bottom: 2px;
    }

    .addWord button {
        width: 35px;
        border-radius: 0.4rem;
        background-color: #824dec;
        border: none;
        box-shadow: 0 0 5px 1px #686868;
        color: white;
        outline: none;
        padding: 0.2rem 0
    }

    .bannerWords .layer2 {
        display: flex
    }

    .bannerWords .layer2 span {
        width: 50%;
        color: white;
        text-align: center;
        padding: 0.3rem 0;
        font-family: "Poppins";
    }
    
    .bannerWords .layer2 span:nth-child(1) {
        background-color: #f42573b5;
    }

    .bannerWords .layer2 span:nth-child(2) {
        background-color: #b30587;
    }

    .bannerWords .layer3 {
        display: flex;
        padding: 1rem;
        background-color: white;
        border-bottom-left-radius: 0.4rem;
        border-bottom-right-radius: 0.4rem;
    }

    .bannerWords .coverLayer3 {
        display: flex;
        width: 100%;
    }

    .coverLayer3 div {
        display: flex;
        width: 100%

    }
    .coverLayer3 div span, .btnActions {
        width: 50%!important
    } 

    .coverLayer3 div span {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .btnActions {
        display: flex;
        justify-content: center
    }

    .btnActions i:nth-child(1) {
        padding: 0.5rem;
        color: white;
        background-color: #873bbd;
        border-radius: 0.4rem;
    }

    .btnActions i:nth-child(2) {
        margin: 0 0.5rem;
        padding: 0.5rem;
        color: white;
        background-color: #ff5151;
        border-radius: 0.4rem
    }

    .btnActions i {
        position: relative;
        cursor: pointer;
        transition: 0.5s;
    }

    .btnActions i:hover {
        transition: 0.5s;
        bottom: 2px
    }

    .btnActions i:nth-child(1):hover {
        box-shadow: 0px 0 5px 2px #873bbd;
    }

    .btnActions i:nth-child(2):hover {
        box-shadow: 0px 0 5px 2px #ff5151;
    }

    .modalForm {
        position: fixed;
        top: 0;
        width: 100%;
        height: 100vh;
        left: 0;
        background-color: #0000007a;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 1s;
        opacity: 0;
        visibility: hidden;
    }

    .modalForm form {
        display: flex;
        flex-direction: column;
        width: 25%;
        background-color: #ff00605e;
        padding: 3rem 1rem;
        border-radius: 0.5rem;
        transform: scale(0);
        position: relative
        
    }

    .visible {
        opacity: 1!important;
        transition: 0.5s;
        visibility: visible!important;
    }

    .scales {
        transition: 1.5s;
        transform: scale(1)!important;
    }


    .modalForm form label {
        color: white;
        font-family: 'Poppins';
        font-weight: 500;
    }

    .explan {
        color: white;
        font-size: 0.7rem
    }

    .modalForm .btnForm {
        position: absolute;
        right: 10px;
        bottom: 10px;
    }

    .btnForm span {
        background-color: #e80fb2;
        padding: 0.5rem;
        border-radius: 0.5rem;
        color: white;
        cursor: pointer;
        position: relative;
    }

    .btnForm button {
        transition: 0.5s;
        position: relative
    }

    .btnForm span:hover,
    .btnForm button:hover {
        transition: 0.5s;
        bottom: 3px;
    }

    .modalForm input {
        background-color: transparent;
        border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
        border-bottom: 1px solid white;
        border-radius: 0;
        color: white;
        outline: none;
    }

    .modalForm input::placeholder {
        color: white!important
    }

    .modalForm input:focus {
        outline: none;
        background-color: transparent;
        color: white;
        border: none;
        box-shadow: none;
        border-bottom: 1px solid white;

    }




</style>
@endsection
