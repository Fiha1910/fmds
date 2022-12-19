@extends('backend.master')

@section('content')

<form action="{{route('demand.submit')}}" method="POST">
  @if($errors->any())

@foreach($errors->all() as $meassage)
    <p class="alert alert-danger">"{{$meassage}}"</p>

@endforeach

@endif
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="product_id">Product Id:</label>
      <select name="branch_id" id="">
      @foreach($product as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
      @endforeach
    </select>
    </div>

    <div class="form-group col-md-6">
      <label for="branch_id">Branch Id:</label>
      <select name="branch_id" id="">
      @foreach($branch as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
      @endforeach
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter Quantity">
  </div>
  <div class="form-group">
    <label for="product_type">Product Type:</label>
    <input name="product_type" type="text" class="form-control" id="product_type" placeholder="Enter Product Type">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="date">Date:</label>
      <input name="date" type="date" class="form-control" id="date" placeholder="Enter Date">
    </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection()