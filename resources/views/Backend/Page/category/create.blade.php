@extends('backend.master')
@section('content')
<form action="{{route('category.form')}}" method="POST">
  @if($errors->any())
    @foreach($errors->all() as $meassage)
    <p class="alert alert-danger">{$meassage}</p>

@endforeach
@endif

    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name:</label>
      <input required type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="product_type">Product type:</label>
      <input required type="text" class="form-control" id="product_type" placeholder="Enter Product Type" name="product_type">
    </div>
  </div>
  <div class="form-group">
    <label for="product_image">Product im
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>age:</label>
    <input type="file" class="form-control" id="product_image" name="product_image">
  </div>

</form>

@endsection
