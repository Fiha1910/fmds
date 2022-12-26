@extends('Frontend.master')

@section('content')
    <style>
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
    <div class="container rounded bg-white mt-5 mb-5" style="margin-top:80px!important">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                    <img class="rounded-circle mt-5" width="150px"
                        src="{{auth()?->user()?->image? auth()?->user()?->image : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'}}">

                    <span class="font-weight-bold">{{ auth()?->user()?->name }}</span><span
                        class="text-black-50">{{ auth()?->user()?->email }}</span><span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">

                <h3 class="text-center mb-5 mt-3">Demand List</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($demands as $key=>$data)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$data->products?->name}}</td>
                            <td>{{$data->quantity}} KG</td>
                            <td>{{$data->products?->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
