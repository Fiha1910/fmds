@extends('frontend.master')


@section('content')
    <!-- Start menu Area -->
    <section class="menu-area section-gap" id="meat">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Services for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $data)
                    <div class="col-lg-4" onclick="location.href='{{ route('categorywiseproduct', $data->id) }}'">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>{{ $data->name }}</h4>
                                <p class="price float-right">
                                    49 BDT
                                </p>
                            </div>
                            <p>
                                {{ $data->product_type }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="branch">
        <h1>Branch List</h1>
        <a href="{{ route('branch.list') }}" class="btn btn-primary mb-5">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>


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
                        <td>
                            <a href="{{ route('branch.edit', $data->id) }}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route('admin.branch.delete', $data->id) }}"
                                class="btn btn-outline-danger">Delete</a>
                        </td>
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
                            <label for="name">Enter Your Name:</label>
                            <input required name="customer_name" type="text" class="form-control" id="name"
                                placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input required name="customer_email" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input required name="customer_phone" type="tel" class="form-control" id="number"
                                placeholder="Enter Contact Number"
">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input required name="customer_password" type="password" class="form-control"
                                id="exampleInputPassword1" placeholder="Password">

                        </div>
                        <p>Status</p>
                        <div  class="mb-3">

                            <Select name="status" class="form-control">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </Select>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>

                </div>
            </div>
        </div>
    </div>
@endsection
