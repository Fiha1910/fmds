@extends('backend.master')
@section('content')

<form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
    @method ('put')
  @if($errors->any())
    @foreach($errors->all() as $meassage)
    <p class="alert alert-danger">{$meassage}</p>

@endforeach
@endif

    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name:</label>
      <input required type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name"value="{{$category->name}}">
    </div>
    <div class="form-group col-md-6">
      <label for="product_type">Product type:</label>
      <input required type="text" class="form-control" id="product_type" placeholder="Enter Product Type" name="product_type"value="{{$category->product_type}}">
    </div>
  </div>
  <div class="form-group">
    <label for="product_image">Product image:</label>
  <input type="file" class="form-control" id="product_image" name="product_image" value="{{$category->product_image}}">
</div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>



@endsection