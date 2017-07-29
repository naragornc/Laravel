@extends('template')

@section('content')
  <form method="post" action="/signup">
    <div class="form-group">
      <label for="firstname">Firstname</label>
      <input class="form-control" placeholder="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Lastname</label>
      <input class="form-control" placeholder="lastname">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-default">
    </div>
  </form>
@endsection
