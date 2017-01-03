@extends("layout")

@section("content")

  <h1>Edit the Note</h1>
  <form class="" action="/notes/{{$note->id}}" method="POST">
    {{ method_field("PATCH") }}
    <div class="form-group">
      <textarea name="body" class="form-control">{{$note->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-warning">Update Note</button>
  </form>
@stop
