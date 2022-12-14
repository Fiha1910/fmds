@extends('backend.master')
@section('content')
<form action="{{route('category.form')}}" method="POST" enctype="multipart/form-data">
  @if($errors->any())
    @foreach($errors->all() as $meassage)
    <p class="alert alert-danger">"{{$meassage}}"</p>

@endforeach
@endif
 
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name:</label>
      <input required type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
    </div>
  

  
    <div class="form-group col-md-6">
      <label for="product_type">Product type:</label>
      <input required type="text" class="form-control" id="product_type" placeholder="Enter Product Type" name="product_type">
    </div>
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
  <input type="file" class="form-control" id="image" name="image">
</div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
