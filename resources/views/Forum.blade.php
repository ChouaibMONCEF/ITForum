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
        <br>
        @if($question->user_id != $auth)
        <form action="">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Comment">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Reply</button>
            </div>
          </div>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
<br>
@endforeach

@endsection