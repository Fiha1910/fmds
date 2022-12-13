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
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $key => $data)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->name}}</td>
      <td>
        
        <img width="100px" styel="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="image">
      </td>
      <td>{{$data->category_id}}</td>
      <td>{{$data->price}} BDT</td>
      <td>{{$data->status}}</td>
      <td>{{$data->product_type}}</td>
      <td>{{$data->quantity ? $data->quantity : "Not Available"}}</td>
      <td>
      <a href="" class="btn btn-outline-success">View</a>
      <a href="{{route('edit.form',$data->id)}}" class="btn btn-outline-primary">Edit</a>
      <a href="{{route('delete.form',$data->id)}}" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr> 
    @endforeach
  </tbody>
</table>
</div>

@endsection