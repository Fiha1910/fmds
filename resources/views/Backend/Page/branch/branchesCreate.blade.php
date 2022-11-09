@extends('backend.master')
@section('content')

<form action="{{route('branches.form')}}" method="POST">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Name</label>
      <input type="text" class="form-control" id="name_form" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="">Contact</label>
      <input type="number" class="form-control" id="contact_form" placeholder="Enter Your Contact" name="contact">
    </div>
  </div>
  
  
  
    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection