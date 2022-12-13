@extends('frontend.master')


@section('content')

<div class="mt-3 text-center  fs-5 bold"><h1>Our available Products</h1></div>
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        @foreach($productinfo as $data)
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{url('/uploads/'.$data->image)}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Product Information.</p>
                <p>Product name: {{$data->name}}</p>
                <p>Price: {{$data->price}} BDT</p>
                <p>Status: {{$data->status}}</p>
                <p>Product Type: {{$data->product_type}}</p>
                <a href="{{route('OrderForm',$data->id)}}" class="btn btn-success mt-2">Demand</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection