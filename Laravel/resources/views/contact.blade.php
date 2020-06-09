@extends('mainLayout')

@section('content')
    <h2>Questa è la schermata Contatti</h2>   
    <ul>
      @foreach($contacts as $contact)
          <li>Nome:{{$contact}}</li>
      @endforeach  
    </ul>   
@endsection