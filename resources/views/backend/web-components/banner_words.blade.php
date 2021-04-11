@extends('backend.component.template')
@section('title')
    @php
        $user = session('user');
        $admin = App\Models\Admin::where('uuid', $user->uuid)->first();
        $words = App\Models\BannerWord::all();
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
                @include('component.message')
                <span>WORDS</span>
                <span>ACTION</span>
            </div>
            <div class="layer3">
                {{-- Json will be here --}}
            </div>
        </div>
    </div>
    <div class="modalForm">
        <form>
            @csrf
            <div class="form-group wordContainer">
              <label for="words">Word Banner</label>
              <input type="text" name="word" class="form-control" id="words" aria-describedby="emailHelp" placeholder="Enter banner words">
            </div>
            <div class="form-group timeContainer">
                <label for="timing">Typing Time</label>
                <input min="1000" type="number" name="time" class="form-control" id="timing" placeholder="Enter typing time">
                <span class="explan">How manny second to typing banner words.</span>
            </div>
            <div class="btnForm">
                <span id="canseling">Cancel</span>
                <button type="submit" id="sendData" class="btn btn-primary">Submit</button>
                <button type="submit" id="updateData" class="btn btn-primary">Save</button>
            </div>
          </form>
    </div>
    <div class="deleteWord">
        <div class="deleteCons">
            <div class="delLayer1">
                <span>Hapus kata &nbsp;</span>
                <span id="delWord"> "Software Engineer"!</span>
            </div>
            <div class="delLayer2">
                <div class="modalDelete">
                    <i class="fas fa-trash-alt"></i>
                </div>
                <div class="btnDelete">
                    <button id="delNo">NO</button>
                    <button id="delYes">YES</button>
                </div>
            </div>
        </div>
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
    var idWord = [];
    function load_banner() {
        var handler = $('.layer3');
        handler.html("");
        $.ajax({
            type: "GET",
            data: "",
            url: '{{route("back.banner-words.getData")}}',
            success: function(e){
                // console.log(e);
                var objectResult = JSON.parse(e);
                $.each(objectResult, function(key,val){
                    var element = "<div class='coverLayer3'>"+
                                        "<div>"+
                                            "<span>" +
                                                val.word
                                            + "</span>" +
                                            "<div class='btnActions'>" + 
                                                `<a id="editWord-${val.id}">` +
                                                    "<i class='fas fa-pencil-alt'></i>" +
                                                `</a>` +
                                                `<a id='del-${val.id}'>` +
                                                    "<i class='fas fa-trash-alt'></i>" +
                                                "</a>"
                                            "</div>"
                                        +"</div>"
                                    +"</div>";
                    handler.append(element);
                    document.getElementById(`del-${val.id}`).addEventListener('click', function(){
                        $('.deleteWord').css("visibility", "visible");
                        $('.deleteWord').css("opacity", "1");
                        $('.deleteWord').css("transition", "0.5s");
                        $('.deleteCons').css("transform", "scale(1)");
                        $('.deleteCons').css("transition", "1s");
                        $('#delWord').text("'" + val.word + "'" + " ?");
                        $('#delYes').click(function(){
                            window.location.href = '/dashboard/web-components/banner_words/update/delete/' + val.id;
                        })

                    });
                    document.getElementById(`editWord-${val.id}`).addEventListener('click', function(){
                        //Show modal edit word
                        $('.modalForm').addClass('visible');
                        $('.modalForm form').addClass('scales');
                        $(`[name='word']`).val(val.word);
                        $('.timeContainer').hide();
                        $('#sendData').hide();
                        $('#updateData').show();
                        $(document).on('click', '.btnForm #updateData', function(event){
                            var input = $('.modalForm form').serialize();
                            event.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: `/dashboard/web-components/banner_words/update/${val.id}`,
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data: input,
                                success: function(data) {
                                    console.log(data);
                                    var parseData = JSON.parse(data);
                                    $(".modalForm form").prepend(parseData.pesan);
                                    $('.err i').click(function(){
                                        $('.err').hide();
                                    });
                                    load_banner();
                                    
                                }
                            });                            
                        });
                    })
                })
                // console.log(objectResult);
            }
        })
    }

    function btnDelete() {
        $('')
    }

    $('#delNo').click(function(){
        $('.deleteWord').css("visibility", "hidden");
        $('.deleteWord').css("opacity", "0");
        $('.deleteWord').css("transition", "0.5s");
        $('.deleteCons').css("transform", "scale(0)");
        $('.deleteCons').css("transition", "1s");
    })

    load_banner();
    
 
    $('.data').load("data.php");

    //Show modal add word
    $('.addWord button').click(function(){
        $('.modalForm').addClass('visible');
        $('.modalForm form').addClass('scales');
        $('.timeContainer').show();
        $('#sendData').show();
        $('#updateData').hide();
        $('[name="word"]').val("");
        $('[name="time"]').val("");

    });


    $('#canseling').click(function(){
        $('.modalForm').removeClass('visible');
        $('.modalForm form').removeClass('scales');
    })

    function send(event) {
        var input = $('.modalForm form').serialize();
        event.preventDefault();
        var url = "{{route('back.banner-words.ajax')}}";
        $.ajax({
            type: "POST",
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: input,
            success: function(data) {
                console.log(data);
                var parseData = JSON.parse(data);
                $(".modalForm form").prepend(parseData.pesan);
                $('.modalForm input').val("");
                $('.err i').click(function(){
                    $('.err').hide();
                });
                load_banner();
                
            }
        })
    }

    $(document).on('click', '.btnForm #sendData', send);

        
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
        flex-direction: column
    }

    .coverLayer3:hover {
        transition: 0.5s;
        background-color: #ff6ba3c7;
        color: white;
        font-weight: bold;
        border-radius: 1rem;
    }

    .bannerWords .coverLayer3 {
        display: flex;
        width: 100%;
        padding: 0.5rem 0;
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

    .btnActions a:nth-child(1) i {
        padding: 0.5rem;
        color: white;
        background-color: #873bbd;
        border-radius: 0.4rem;
    }

    .btnActions a:nth-child(2) i {
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

    .btnActions a:nth-child(1) i:hover {
        box-shadow: 0px 0 5px 2px #873bbd;
    }

    .btnActions a:nth-child(2) i:hover {
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

    .deleteWord {
        position: fixed;
        top: 0;
        left: 0;
        background-color: #252525d1;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
        transition: 0.5s;
    }

    .deleteCons {
        display: flex;
        flex-direction: column;
        width: 25%;
        border-radius: 0.3rem;
        padding: 1rem;
        background: linear-gradient(to right, #771953 0%, #1f2173 51%, #771953 100%);
        box-shadow: 0 0 15px 1px #771953;
        transition: 1s;
        transform: scale(0);
    }


    .delLayer1, .delLayer2 {
        margin: 1rem 0;
        display: flex;
    }

    .delLayer1 {
        margin: 1rem 0;
        display: flex;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        font-family: 'Quicksand';
        color: white;
        background-color: #63047b;
        box-shadow: 0 0 14px 5px #bc0fe6;
        border-radius: 0.5rem;
        padding: 1rem 0;
    }

    .modalDelete {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .modalDelete i {
        font-size: 5rem;
        padding: 2rem;
        background-color: #f3111161;
        border-radius: 5rem;
        color: white;
    }

    .delLayer2 {
        flex-direction: column
    }

    .btnDelete {
        margin: 1rem 0;
        display: flex;
        justify-content: center;
    }

    .btnDelete button  {
        width: 15%;
        margin: 0 0.5rem;
        padding: 0.5rem;
        border-radius: 0.5rem;
        color: white;
        border: none;
    }

    .btnDelete button:nth-child(1) {
        background-color: #c3095f;
        transition: 0.5s;
        outline: none

    }

    .btnDelete button:nth-child(1):hover {
        transition: 0.5s;
        box-shadow: 0 0 10px 2px #ff0579;
        outline: none
    }

    .btnDelete button:nth-child(2) {
        background-color: teal;
        transition: 0.5s;
        outline: none

    }

    .btnDelete button:nth-child(2):hover {
        transition: 0.5s;
        box-shadow: 0 0 10px 2px #02c7c7;
        outline: none

    }



</style>
@endsection
