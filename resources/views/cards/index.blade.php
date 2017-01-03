@extends("layout")

@section("content")

  <h1>Show all cards</h1>
  @foreach ($cards as $card)

    <a href="/cards/{{$card->id}}">
      {{ $card->title }}
    </a>

  @endforeach
@stop
