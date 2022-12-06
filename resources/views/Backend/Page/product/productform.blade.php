@extends('backend.master')
@section('content')

<form action="{{route('create.form')}}" method="post" enctype="multipart/form-data">
@foreach($errors->all() as $meassage)
    <p class="alert alert-danger">{$meassage}</p>

@endforeach

@csrf


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name:</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Enter Product Name">
    </div>
    <div class="form-group">
    <label for="image">Image:</label>
  <input type="file" class="form-control" id="image" name="image">
</div>

  <div class="form-group">
    <label for="category_id">Category_Id</label>
    <input name="category_id" type="text" class="form-control" id="category_id" placeholder="Category Id">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input name="price" type="double" class="form-control" id="price" placeholder="Enter Price">
  </div>

  <div class="from-group">
      <label for="">Select Status</label>
    <select name="status" id="" class="from-control">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select> 
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="product_type"></label>
      <input name="product_type" type="product_type" class="form-control" id="product_type" placeholder="Enter Product type">
    </div>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection