@extends('layouts.main')

<section>

    <div class="container">
        <div class="border-bottom border-dark py-7">
            <p class="text-dark text-center fs-1">Edit Profile</p>
            <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mb-5">Thoughts and words</h1>

            {{-- Profile cards --}}
            <div class="container">
                <form action="/updateprofile/{{ $user['id'] }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin"
                                                class="rounded-circle p-1 bg-primary" width="110">
                                            <div class="mt-5">
                                                <h4 class="mb-5">John Doe</h4>
                                                <button class="btn btn-primary mb-4">Edit</button>
                                                <button class="btn btn-outline-primary">Logout</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <h6 class="mt-3">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $user['name'] }}">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <h6 class="mt-3">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="email" class="form-control"
                                                    value="{{ $user['email'] }}">
                                            </div>
                                        </div>
                                        {{-- <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <h6 class="mt-3">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="phone" class="form-control"
                                                    value="(239) 816-9029">
                                            </div>
                                        </div> --}}
                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <h6 class="mt-3">Age</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="age" class="form-control"
                                                    value="{{ $info['age'] }}">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <h6 class="mt-3">Education Level</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="edu_level" class="form-control"
                                                    value="{{ $info['edu_level'] }}">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <h6 class="mt-3">City</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="city" class="form-control"
                                                    value="{{ $info['city'] }}">
                                            </div>
                                        </div>

                                        {{-- <div class="row mb-2">
                                            <div class="col-sm-3">
                                                <h6 class="mt-3">Image</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" class="form-control" id="inputGroupFile04"
                                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                            </div>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
