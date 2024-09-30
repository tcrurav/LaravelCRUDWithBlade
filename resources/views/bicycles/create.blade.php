@extends('layout')

@section('content')
  <h1>Create a New Bicycle</h1>
  <form method="POST" action="{{ route('bicycles.store') }}">
    @csrf
    <div class="form-group">
      <label for="brand">Brand</label>
      <input type="text" name="brand" class="form-control" id="brand" placeholder="Enter bicycle brand">
    </div>
    <div class="form-group">
      <label for="model">Model</label>
      <input type="text" name="model" class="form-control" id="model" placeholder="Enter bicycle model">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{ route('bicycles.index') }}">Back to the list</a>
@endsection
