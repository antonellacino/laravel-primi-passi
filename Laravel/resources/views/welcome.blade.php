@extends('mainLayout')

@section('content')
<h2>Lunga</h2>
<ul>
@foreach($lunga as $card)
 <li>
    <a href="{{ route('showPasta',$card['id']) }}">
        {{$card['id']}}
        {{$card['titolo']}}
    </a>
</li>

@endforeach
<h2>Corta</h2>
@foreach($corta as $card)
    <li>
        <a href="{{ route('showPasta',$card["id"]) }}">
            {{$card['id']}}
            {{$card['titolo']}}
        </a>
    </li>
@endforeach
<h2>Cortissima</h2>
@foreach($cortissima as $card)
    <li>
        <a href="{{ route('showPasta',$card["id"]) }}">
            {{$card['id']}}
            {{$card['titolo']}}
        </a>
    </li>
@endforeach
</ul>
@endsection