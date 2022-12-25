@extends("backend.master")

@section("content")
<div>
   <h1>Category List</h1>

   
 <a href="{{route('category.create')}}" class="btn btn-primary">Create</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      
      <th scope="col">Product Type</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $key => $data)


    <tr>
      <th scope="row">{{$key + $category->firstItem()}}</th>
      
      <td>{{$data->name}}</td>
      
      <td>{{$data->product_type}}</td>
  
      
      <td>
        
        <img width="100px" styel="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="image">
      </td>
      <td>
        <a href="{{route('category.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
        <a href="{{route('admin.product.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
       

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$category->links()}}
</div>

@endsection