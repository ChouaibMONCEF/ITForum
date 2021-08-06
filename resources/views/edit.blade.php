@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="col-sm-7 top-50 start-50 translate-middle">
    <div class="card">
    <button type="submit" onclick="window.location='{{ url("questions") }}'" class="btn btn-primary">Back</button>
 </div>
  </div>
</div> <br>
@foreach ($question as $q)
<div class=" d-flex justify-content-center">
<form method="post" action="{{ route('updateQuestion') }}">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Title</label>
      <input type="text" value="{{ $q->title }}" class="form-control" name="title" placeholder="Question title here">
    </div>
    <div class="form-group col-md-12">
    <label for="inputAddress">Description</label>
    <textarea type="text" class="form-control" name="description">{{ $q->description }}</textarea>
  </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Tags</label>
      <input type="text" value="{{ $q->tags }}"class="form-control" name="tags" placeholder="Keywords">
    </div>
    <input type="hidden" value="{{ $q->id }}"class="form-control" name="question_id" placeholder="Keywords">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
<!-- </div>
<div class="d-flex justify-content-center">
  <div class="col-sm-7 top-50 start-50 translate-middle">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $q->title }}</h5>
        <p class="card-text">{{ $q->description }}</p>
        <h6 class="card-text" >{{ $q->tags }}</h6>
      </div>
    </div>
  </div>
</div>
<br> -->
@endforeach

@endsection