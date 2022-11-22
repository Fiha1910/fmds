@extends('backend.master')
@section('content')
<div>
  <h1>Stock List</h1>
<a href="{{route('stocks_table')}}" class="btn btn-primary">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($stock as $key  )
    
    <tr>

      <td>{{$key->id}}</td>
      <td>{{$key->price}}</td>
      <td>{{$key->image}}</td>
      <td>{{$key->product_quantity}}</td>
    </tr>
    
    @endforeach
  </tbody>
</table>
</div>

@endsection