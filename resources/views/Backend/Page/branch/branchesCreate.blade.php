@extends('backend.master')
@section('content')

<form action="{{route('branches.form')}}" method="POST">
  @csrf

  @if($errors->any())
    @foreach($errors->all() as $meassage)
    <p class="alert alert-danger">"{{$meassage}}"</p>

@endforeach
@endif
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Name</label>
      <input type="text" class="form-control" id="name_form" placeholder="Enter Branch Name" name="name">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Address</label>
      <input type="text" class="form-control" id="contact_form" placeholder="Enter Your Address" name="address">
    </div>
  </div>

    <div class="form-row">
  <div class="form-group col-md-6">
      <label for="">Location</label>
      <input type="text" class="form-control" id="contact_form" placeholder="Enter Your Location" name="location">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="">Contact</label>
      <input type="tel" class="form-control" id="contact_form" placeholder="Enter Your Contact" name="contact" placeholder="123-4567-7890" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{4}[\s.-]?\d{4}$>
    </div>
  </div>

    <div class="from-group">
      <label for="">Select Status</label>
    <select name="status" id="" class="from-control">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select> 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection