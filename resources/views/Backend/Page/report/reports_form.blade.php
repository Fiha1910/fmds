@extends('backend.master')
@section('content')
<form action="{{route(report.store)}}" method="POST">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="feedback">Feedback Id</label>
      <input type="number" class="form-control" id="feedback" placeholder="Enter Id" name="feedback">
    </div>
    <div class="form-group col-md-6">
      <label for="branch">Branch Id</label>
      <input type="number" class="form-control" id="branch" placeholder="Enter Id" name="branch">
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