@extends('frontend.master')


@section('content')

    @if($errors->any())

        @php

            foreach($errors->all() as $data){
            
            notify()->error($data);
            }
        @endphp
    @endif

    <section id="branch">
        <h1 class="text-center display-4 my-4">Branch List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Status</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($branchs as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->location }}</td>
                        <td>{{ $data->contact }}</td>
                        <td>{{ $data->status }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>

    <!-- End menu Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Meat we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="img-pop-home">
                        <img class="img-fluid" src="{{ url('frontend/img/g1.jpg') }}" alt="">
                    </a>
                    <a href="#" class="img-pop-home">
                        <img class="img-fluid" src="{{ url('frontend/img/g2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <a href="#" class="img-pop-home">
                        <img class="img-fluid" src="{{ url('frontend/img/g3.jpg') }}" alt="">
                    </a>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#" class="img-pop-home">
                                <img class="img-fluid" src="{{ url('frontend/img/j4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="#" class="img-pop-home">
                                <img class="img-fluid" src="{{ url('frontend/img/j5.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery Area -->


    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login Form</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.login') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required name="email" type="email" class="form-control-plaintext"
                                    placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input required name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('registration') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input required name="name" type="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Branch Name:</label>
                            <select name="branch_id" class="form-control">

                            @foreach($branchs as $branch)
                                <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                            </select>                                
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input required name="customer_email" type="email" class="form-control" id="email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input required name="customer_phone" type="tel" class="form-control" id="number"
                                placeholder="Enter Contact Number" min="11" max="13"/>
">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input required name="customer_password" type="password" class="form-control"
                                id="exampleInputPassword1" placeholder="Password">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
