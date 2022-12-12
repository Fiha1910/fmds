@extends('backend.master')
@section('content')


<div>
    <h1>Distribution List</h1>
    <a href="{{route('distributions.form')}}"class="btn btn-primary mb-5">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Demand Id</th>
      <th scope="col">Product Type</th>
      <th scope="col">Quantity</th>
      <th scope="col">Contact</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($distribution as $data)
    <tr>
    <th scope="row">{{$data->id}}</th>
      <td>{{$data->demand_id}}</td>
      <td>{{$data->product_type}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->date}}</td>
      <td>
        <a href="" class="btn btn-outline-success">View</a>
        <a href="{{route('products.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
        <a href="" class="btn btn-outline-primary">Edit</a>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
{{$distribution->links()}}
</div>


@endsection