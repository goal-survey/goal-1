@extends('layouts.main')

@section('viewsurvey')


<section>

  <div class="container">
    <div class="border-bottom border-dark py-7">
      <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mb-5">{{$survey['survey_name']}}</h1>
      <div class="row d-flex justify-content-center">

        <iframe src="{{$survey['survey_link']}}" style="max-width: 800px" height="1378" frameborder="0" marginheight="0" marginwidth="0">Loading..</iframe>

        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>





    
@endsection