@extends('frontend.master')


@section('content')


<div class="container">
    <div class="container">
        <div class="container">
                        
            <form action="{{route('OrderForm.submit',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Delivery to branch</label>
                    <select name="branch_id">
                        @foreach($branch as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Quantity</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter quanity" name="quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Product Type</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter type" name="product_type">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter type" name="date">
                </div>
                <button type="submit" class="btn btn-primary">Submit Demand</button>
                
            </form>
        </div>
    </div>
</div>

@endsection