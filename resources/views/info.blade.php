@extends('layouts.main')

    <div class="container">
        <div class="border-bottom border-dark py-7">

          <div class="mt-5">
          <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mt-3">One step to begin</h1>
        </div>
          <div class="row align-items-center gx-xl-7">
              <form action="/store" method="post">
                @csrf

                  <div class="container mt-5">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Age</label>
                      <select class="form-select" name="age" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="18">18-24</option>
                          <option value="24">24-30</option>
                          <option value="30">30-36</option>
                          <option value="43">36-42</option>
                          <option value="42">+42</option>

                        </select>   
                              </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Education Level</label>
                    <select class="form-select" aria-label="Default select example" name="edu_level">
                      <option selected>Open this select menu</option>
                      <option value="1">High school</option>
                      <option value="2">Bachelor's degree</option>
                      <option value="3">Postgraduate</option>
                    </select>        </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">City</label>
                      <select class="form-select" aria-label="Default select example" name="city">
                          <option selected>Open this select menu</option>
                          <option value="1">Amman	</option>
                          <option value="2">Zarqa	</option>
                          <option value="3">Irbid	</option>
                          <option value="4">Ajloun</option>
                          <option value="5">Jerash</option>
                          <option value="6">Mafraq</option>
                          <option value="7">Balqa	</option>
                          <option value="8">Aqaba	</option>
                          <option value="9">Madaba</option>
                          <option value="10">Karak</option>
                          <option value="11">Tafilah</option>
                          <option value="12">Ma'an</option>
                        </select>
                                </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
        </div>
      </div>
