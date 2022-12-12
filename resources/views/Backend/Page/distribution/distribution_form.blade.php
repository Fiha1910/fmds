@extends('backend.master')
@section('content')
<form action="{{route('distribution.store')}}" method="POST">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="demand_id">Demand Id:</label>
      <input required type="number" class="form-control" id="demand_id" placeholder="Enter Id" name="demand_id">
    </div>
    <div class="form-group col-md-6">
      <label for="product_type">Product Type:</label>
      <input required type="text" class="form-control" id="product_type" placeholder="Enter Product Type" name="product_type">
    </div>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input required type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
  </div>
  <div class="form-group">
    <label for="contact">Contact:</label>
    <input required type="number" class="form-control" id="contact_form" placeholder="Enter Coantact Number" name="contact">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="date">Date:</label>
      <input required type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 
</form>



@endsection