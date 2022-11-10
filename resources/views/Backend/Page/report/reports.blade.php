@extends('backend.master')
@section('content')

<div>
    <h1>Report List</h1>
    <a href="{{route('report.list')}}" class="btn btn-primary">create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Feedback Id</th>
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