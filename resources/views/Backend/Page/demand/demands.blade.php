@extends('backend.master')
@section('content')

<div>
    <h1>Demand List</h1>
    

    <a href="{{route('demand.create')}}" class="bform.detailstn btn-primary">Create New Demand</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Date</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Branch Id</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>

@endsection