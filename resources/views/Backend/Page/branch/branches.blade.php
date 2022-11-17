@extends("backend.master")


@section('content')

<h1>Branch List</h1>
<a href="{{route('branch.create')}}" class="btn btn-primary mb-5">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Branches Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($branch as $data)
    <tr>
      <th scope="row">1</th>
      <td>{{$data->name}}</td>
      <td>{{$data->contact}}</td>
      <td></td>
      <td>
        <a href="" class="btn btn-outline-primary">Update</a>
        <a href="" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection