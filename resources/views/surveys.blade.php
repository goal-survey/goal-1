@extends('layouts.main')

@section('view')
<div class="container text-center mt-5 d-flex ">
        <div class="row p-2 mt-5">

@foreach ($surveys as $survey)
      <div class="col">
        <div class="card" style="width: 18rem;margin-top:10%;">
            <img src="http://www.formpl.us/blog/image_serve/business-survey-template" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$survey['survey_name']}}</h5>
              <p class="card-text">{{$survey['category']}}</p>
              <a href="viewsurvey/{{$survey['id']}}" class="btn p-2" style="background: #65E4A3">Fill out the Survey</a>
            </div>
          </div>
      </div>
    @endforeach
</div>
    </div>

@endsection
