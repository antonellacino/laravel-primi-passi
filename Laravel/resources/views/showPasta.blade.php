@extends('mainLayout')

@section('content')
    <h1>{{$card['titolo']}}</h1>

    <img src="{{$card['src']}}" alt="{{$card['titolo']}}"> 

    <p>Descrizione:{!!$card['descrizione']!!}</p>
@endsection