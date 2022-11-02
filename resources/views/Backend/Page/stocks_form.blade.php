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
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="price">
    </div>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <div class="form-group">
    <label for="product_quantity">Product_Quantity</label>
    <input type="number" class="form-control" id="product_quantity" name="product_quantity" placeholder="product_quantity">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection