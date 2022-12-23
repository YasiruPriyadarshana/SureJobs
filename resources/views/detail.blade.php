
@extends("layout")
@section("content")
  
<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <article class="single-post">
        <h2>{{$job->title}}</h2>
        <ul class="list-inline">
          <li class="list-inline-item">{{substr($job->updated_at, 0, -3)}}</li>
        </ul>
        <img src="../storage/company1.jpg" alt="">
        <p>{{$job->position}}</p>
        <p>{{$job->location}}</p>
        <p>{{$job->salary_range}}</p>
        <p>{{$job->type}}</p>
        <p>{{$job->description}}</p>
        <ul class="social-circle-icons list-inline">
          <li class="list-inline-item text-center"><a class="fa fa-facebook" href=""></a></li>
          <li class="list-inline-item text-center"><a class="fa fa-twitter" href=""></a></li>
          <li class="list-inline-item text-center"><a class="fa fa-google-plus" href=""></a></li>
          <li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href=""></a></li>
          <li class="list-inline-item text-center"><a class="fa fa-linkedin" href=""></a></li>
        </ul>
      </article>
    </div>
    
  </div>
</div>

@endsection
    