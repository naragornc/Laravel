@extends('templates.template')

@section('content')

  <div class="container">
    @foreach ($registers as $register)
    <div class="row">
      <div class="well">
        <label>Text</label>
        <p>{{$register}}</p>
        <p></p>
      </div>
    </div>
    @endforeach
  </div>

  @include('components.signup')
@endsection
