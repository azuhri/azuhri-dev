@extends('component.template')
@section('title')
Testing live coding!
@endsection
@section('style')

<style>
    #fibonaci {
        font-size: 3rem;
    }
</style>

@endsection
@section('content')
{{-- <h1>hello world</h1> --}}

<span id="fibonaci">
    <p></p>
</span>

@php
    // Asc bubble
    function bubble_asc($urut) {
        do{
            $check = false;
            for($a = 0; $a < count($urut) - 1; $a++) {
                if($urut[$a] > $urut[$a + 1]) {
                    list( $urut[$a+1], $urut[$a] ) = [ $urut[$a], $urut[$a+1] ] ;
                    $check = true;
                }
            }
        } while($check);

        return $urut;
    }
    
    // desc bubble
    function bubble_desc($urut) {
        do{
            $check = false;
            for($a = 0; $a < count($urut) - 1; $a++) {
                if($urut[$a] < $urut[$a + 1]) {
                    list( $urut[$a+1], $urut[$a] ) = [ $urut[$a], $urut[$a+1] ] ;
                    $check = true;
                }
            }
        } while($check);

        return $urut;
    }

    $angka = [1,9,2,8 , 15 , 30, 25];
    echo "<h1> ASC BUBLE </h1>"; 
    echo "<h3>sebelum: " .  implode("-" , $angka) . "</h3>" . "<br>";
    echo "<h3>sesudah: " .  implode("-" , bubble_asc($angka)) . "</h3>";

    echo "<h1> DESC BUBLE </h1>"; 
    echo "<h3>sebelum: " .  implode("-" , $angka) . "</h3>" . "<br>";
    echo "<h3>sesudah: " .  implode("-" , bubble_desc($angka)) . "</h3>";


@endphp

<script>
    var previous_number = prompt('Angka pertama: ');
    var current_number = prompt('Angka kedua: ');
    var line_n = prompt('Sampai baris ke: ');

    
    // console.log(`${previous_number + " " + current_number}`);
    var tag = document.createElement('span');
    tag.textContent = previous_number + " - " + current_number;
    document.querySelector('#fibonaci').appendChild(tag);
    for(let i = 0; i < line_n; i++ ) {
        var output = parseInt(previous_number) + parseInt(current_number)
        var tag = document.createElement('span');
        tag.textContent = " - " + output;

        document.querySelector('#fibonaci').appendChild(tag);

        var previous_number = current_number;
        var current_number = output;

    }
  
    
</script>

@endsection

