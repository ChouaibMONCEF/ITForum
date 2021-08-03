@extends('layouts.app')
@section('content')
    <div class=" d-flex justify-content-center">
<form method="post" action="{{ route('storeQuestion') }}">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Question title here">
    </div>
    <div class="form-group col-md-12">
    <label for="inputAddress">Description</label>
    <textarea type="text" class="form-control" name="description"> </textarea>
  </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Tags</label>
      <input type="text" class="form-control" name="tags" placeholder="Keywords">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
<!-- <form action="">
        <input type="text" name="title" >
        <input type="text" name="description" >
        <input type="text" name="tags" >
        <button type="submit">Add</button>
    </form> -->
@endsection