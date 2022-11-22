@extends('backend.master')
@section('content')

<form action="{{route('stocks.form')}}" method="POST">
    @csrf
  <div class="form-row">
    <!-- <div class="form-group col-md-6">
      <label for="stocks_id">Id</label>
      <input type="number" class="form-control" id="stocks_id" name="stocks_id" placeholder="id">
    </div> -->
    <div class="form-group col-md-6">
      <label for="products_id">Product_Id</label>
      <input type="number" class="form-control"  name="products_id" placeholder="Enter Id">
    </div>
  </div>
  <div class="form-group">
    <label for="products_quantity">Product_Quantity</label>
    <input type="number" class="form-control"  name="product_quantity" placeholder="Enter Product Quantity">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control"  name="image" placeholder="Enter Image">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price" placeholder="Enter Products_Price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection