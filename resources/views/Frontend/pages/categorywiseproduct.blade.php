@extends('Frontend.master')
@section('content')
<section>
    <div class="container">
        <div class="container">
            <h1 class="text-center fw-bold my-5">category wise product</h1>
            <div class="row">

        @foreach($product as $data)

                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('/uploads/',$data->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->name}}</h5>
                        <p class="card-text">{{$data->price}}</p>
                        <a href="#" class="btn btn-primary">{{$data->category->name}}</a>
                    </div>
                </div>
                </div>
        @endforeach


            </div>
        </div>
    </div>
</section>
@endsection