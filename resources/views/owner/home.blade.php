@extends('layouts.main')

@section('createsurvey')




{{-- <h1>Hello Owner</h1> --}}

{{-- <a href="{{ route('owner.logout') }}">Logout</a> --}}

    <div class="container mt-7">
      <div class="border-bottom border-dark py-7">
        <p class="text-dark text-center fs-1"></p>
        <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mb-5">Create New Survey</h1>
        <div class="row align-items-center gx-xl-7">

            <form action="/storesurvey" method="POST">
              @csrf
                <div class="container mt-5">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Survey Name</label>
                  <input type="text" name="survey_name" class="form-control
                  " id="exampleInputEmail1" aria-describedby="emailHelp     border-radius: 5rem;">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Survey link</label>
                    <input type="text"  name="survey_link"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category</label>
                    <select class="form-select" name="category" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Education">Education</option>
                        <option value="Health">Health</option>
                        <option value="Buissness">Buissness</option>
                      </select>          </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age</label>
                    <select class="form-select" name="age" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Less Than 18">Less than 18</option>
                        <option value="18-24">18-24</option>
                        <option value="24-30">24-30</option>
                        <option value="30-36">30-36</option>
                        <option value="36-42">36-42</option>
                        <option value="42-48">42-48</option>
                        <option value="48-54">48-54</option>
                        <option value="More Than 54">More Than 54</option>

                      </select>           </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Education Level</label>
                  <select class="form-select" name="edu_level" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="High school">High school</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Postgraduate">Postgraduate</option>
                  </select>        </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">City</label>
                    <select class="form-select"name="city" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Amman">Amman	</option>
                        <option value="Zarqa">Zarqa	</option>
                        <option value="Irbid">Irbid	</option>
                        <option value="Ajloun">Ajloun</option>
                        <option value="Jarash">Jarash</option>
                        <option value="Mafraq">Mafraq</option>
                        <option value="Balqa">Balqa	</option>
                        <option value="Aqaba">Aqaba	</option>
                        <option value="Madaba">Madaba</option>
                        <option value="Karak">Karak</option>
                        <option value="Tafilah">Tafilah</option>
                        <option value="Ma'an">Ma'an</option>

                      </select>
                              </div>

                <button type="submit" class="btn" style="background:#01d28e ">Submit</button>
              </form>
            </div>
        </div>
        {{-- @foreach ($surveys as $survey)
    
@endforeach --}}
      </div>
    </div>
    <!-- end of .container-->


  @endsection
