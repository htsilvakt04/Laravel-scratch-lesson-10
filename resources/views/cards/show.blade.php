@extends("layout")


@section("content")

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <!-- Checking form field -->
      @if (count($errors))
        <ul>
          @foreach ($errors->all() as $error)
            <li style="color: salmon; list-style-type: none "> {{ $error }} </li>
          @endforeach
        </ul>
      @endif
      <!-- End checking form -->
      <h1>{{ $card->title }}</h1>
      <ul class="list-group">
        @foreach ($card->notes as $note)
          <li class="list-group-item">
            {{ $note->body }}
            <a href="#" style="float:right">{{ $note->user->username }}</a>
          </li>
        @endforeach
      </ul>
      <hr>
      <h2>Add a new note</h2>

      <form class="" action="/cards/{{$card->id}}/notes" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" class="form-control">{{ old("body") }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Add Note</button>
      </form>
    </div>
  </div>

@stop
