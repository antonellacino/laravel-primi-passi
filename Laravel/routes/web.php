<?php

Route::get('/', function () {
    $cards=config('pasta');
    $collection=collect($cards);

    $lunga=$collection->where('tipo','lunga');
    $corta=$collection->where('tipo','corta');
    $cortissima=$collection->where('tipo','cortissima');
   
    //     $cortissima=[];
    //     $corta=[];
    //     $lunga=[];

    // foreach($cards as $card){
    //     if($card["tipo"]==="lunga"){
    //         $lunga[]=$card;
    //     }
    //     if($card["tipo"]==="corta"){
    //         $corta[]=$card;
    //     }
    //     if($card["tipo"]==="cortissima"){
    //         $cortissima[]=$card;
    //     }
    // }
    return view('welcome',compact('lunga','corta','cortissima'));
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {

$contacts=[
    'Mario','Gianni','Filippo','Giulio'

];
    return view('contact',compact('contacts'));
});

