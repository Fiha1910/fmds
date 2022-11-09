@extends('backend.master')
@section('content')
<form action="{{route('distribution.store')}}" method="POST">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name:</label>
      <input required type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="date">Date:</label>
      <input required type="date" class="form-control" id="date_form" placeholder="Enter Date" name="distribution_date">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input required type="text" class="form-control" id="inputAddress" placeholder="Apartment or floor" name="address">
  </div>
  <div class="form-group">
    <label for="contact">Contact:</label>
    <input required type="number" class="form-control" id="contact_form" placeholder="Enter Coantact Number" name="contact">
  </div>
  
    
    
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 
</form>



@endsection