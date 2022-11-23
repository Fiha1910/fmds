@extends('backend.master')

@section('content')

<form action="{{route('branch.update',$branch->id)}}" method="POST">
    @method('put')
    @if($errors->any())
    @foreach($errors->all() as $meassage)
    <p class="alert alert-danger">{$meassage}</p>

@endforeach
@endif

  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Name</label>
      <input type="text" class="form-control"  placeholder="Enter Branch Name" name="name" value="{{$branch->name}}">
    </div>
    <select name="status" id="">
      <option @if($branch->status=='active') selected @endif value="active">Active</option>
      <option @if($branch->status=='inactive') selected @endif value="inactive">Inactive</option>
    </select>

    <div class="form-group col-md-6">
      <label for="">Contact</label>
      <input type="number" class="form-control"  placeholder="Enter Your Contact" name="contact"value="{{$branch->contact}}">
    </div>
  </div>
  
  
  
    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection