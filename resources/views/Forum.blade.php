@extends('layouts.app')
@section('content')
@foreach ($questions as $question)
<div class="d-flex justify-content-center">
  <div class="col-sm-7 top-50 start-50 translate-middle">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $question->title }}</h5>
        <p class="card-text">{{ $question->description }}</p>
        <h6 class="card-text" >{{ $question->tags }}</h6>
      </div>
    </div>
  </div>
</div>
<br>
@endforeach

@endsection