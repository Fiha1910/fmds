@extends("backend.master")

@section("content")
<div>
   <h1>Category List</h1>

   
 <a href="{{route('category.create')}}" class="btn btn-primary">Create</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $data)


    <tr>
      <th scope="row">1</th>
      
      <td>{{$data->name}}</td>
      <td>{{$data->product_type}}</td>
      <td><img src="{{$data->product_image}}"></td>
      <td>
        <a href="" class="btn btn-outline-primary">Update</a>
        <a href="" class="btn btn-outline-danger">Delete</a>
        <a href="" class="btn btn-outline-success">View</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$category->links()}}
</div>

@endsection