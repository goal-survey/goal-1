@extends('layouts.main')

<section>

    <div class="container">
        <div class="border-bottom border-dark py-7">
            <p class="text-dark text-center fs-1">Profile</p>
            <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mb-5">Thoughts and words</h1>

            {{-- Profile cards --}}
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                            alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                        <div class="mt-5">
                                            {{-- {{dd($info);}}  --}}
                                            <h4 class="mb-5">{{$user['name']}}</h4>  
                                                                                                                                                
                                           <a href="editprofile/{{$user['id']}}"> <button class="btn btn-primary mb-4">Edit</button></a>                                                    
                                            <button class="btn btn-outline-primary" style="color:#0d263f;"
                                            >Logout</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row mb-0">
                                        <div class="col-sm-3">
                                            <h6 class="mt-3">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <label for="full_name" class="form-control">{{$user['name']}}</label>
                                            {{-- <input type="text" class="form-control" value="John Doe"> --}}
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-sm-3">
                                            <h6 class="mt-3">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <label for="email" class="form-control">{{$user['email']}}</label>
                                           
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-0">
                                        <div class="col-sm-3">
                                            <h6 class="mt-3">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <label for="phone" class="form-control">{{$user['phone']}}</label>
                                           
                                        </div>
                                    </div> --}}
                                    <div class="row mb-0">
                                        <div class="col-sm-3">
                                            <h6 class="mt-3">Age</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <label for="age" class="form-control">{{$info['age']}}</label>
                                            {{-- <input type="text" class="form-control"
                                                value="(320) 380-4539"> --}}
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-sm-3">
                                            <h6 class="mt-3">Education Level</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <label for="edu_level" class="form-control">{{$info['edu_level']}}</label>
                                            {{-- <input type="text" class="form-control"
                                                value="Bay Area, San Francisco, CA"> --}}
                                        </div>
                                    </div> 
                                    <div class="row mb-0">
                                        <div class="col-sm-3">
                                            <h6 class="mt-3">City</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <label for="city" class="form-control">{{$info['city']}}</label>
                                            {{-- <input type="text" class="form-control"
                                                value="Bay Area, San Francisco, CA"> --}}
                                        </div>
                                    </div>                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contanier p-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Survey History</h5>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Submitit Date</th>
                                            <th scope="col">Points</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>


