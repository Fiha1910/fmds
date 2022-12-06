@extends('backend.master')
@section('content')

<div>

<h1>Products List</h1>

<a href="{{route('product.create')}}" class="btn btn-primary">Create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Category_Id</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Product_Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
  </tbody>
</table>
</div>

@endsection