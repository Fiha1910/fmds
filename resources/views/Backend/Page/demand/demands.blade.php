@extends('backend.master')
@section('content')

<div>
    <h1>Demand List</h1>
    

    <a href="{{route('demand.create')}}" class="bform.detailstn btn-primary">Create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Id</th>
      <th scope="col">Branch Id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Product Type</th>
      <th scope="col">Date</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($demand as $key => $data)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->product_id}}</td>
      <td>{{$data->branch_id}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->product_type}}</td>
      <td>{{$data->date}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>

@endsection