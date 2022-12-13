@extends('backend.master')
@section('content')
<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
@method ('put')


@if($errors->any())
@foreach($errors->all() as $meassage)
    <p class="alert alert-danger">{$meassage}</p>

@endforeach
@endif
@csrf


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name:</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Enter Product Name" value="{{$product->name}}">
    </div>
    <div class="form-group">
    <label for="image">Image:</label>
  <input type="file" class="form-control" id="image" name="image" >
</div>

  <div class="form-group">
    <label for="category_id">Category_Id:</label>
    <input name="category_id" type="text" class="form-control" id="category_id" placeholder="Category Id"  value="{{$product->category_id}}">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input name="price" type="double" class="form-control" id="price" placeholder="Enter Price" value="{{$product->price}}">
  </div>

  <div class="from-group">
      <label for="">Select Status:</label>
    <select name="status" id="" class="from-control">
      <option @if($product->status =="active" ) selected  @endif value="active">Active</option>
      <option @if($product->status =="inactive" ) selected  @endif value="inactive">Inactive</option>
    </select> 
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="product_type">Product Type</label>
      <input name="product_type" type="product_type" class="form-control" id="product_type" placeholder="Enter Product type" value="{{$product->product_type}}">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="quantity">Quanttty:</label>
      <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter Quantity" value="{{$product->quantity}}">
    </div>
  


  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection