@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="col-sm-7 top-50 start-50 translate-middle">
    <div class="card">
    <button type="button" onclick="window.location='{{ url("question/add") }}'" class="btn translate-middle btn-primary">Add New Question</button>
  </div>
  </div>
</div> <br>
@foreach ($questions as $question)
<div class="d-flex justify-content-center">
  <div class="col-sm-7 top-50 start-50 translate-middle">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $question->title }}</h5>
        <p class="card-text">{{ $question->description }}</p>
        <h6 class="card-text" >{{ $question->tags }}</h6>
        <form action="{{route('editQuestion')}}" method="post">
          @csrf
          <input type="hidden" value="{{ $question->id }}" name="question_id">
          <button type="submit" class="btn ml-1 btn-primary float-right">Edit</button>
        </form>
        <form action="{{route('deleteQuestion')}}" method="post">
          @csrf
          <input type="hidden" value="{{ $question->id }}" name="question_id">
          <button type="submit" class="btn btn-danger float-right">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br>
@endforeach

@endsection