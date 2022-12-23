@extends("layout")
@section("content")
<!-- Search Area -->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>FIND THE JOB THAT FITS YOU</h1>
					<p>The greatest way for businesses and job seekers to connect online <br> Let's find your dream job today</p>
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-md-12 align-content-center">
								<form action="{{ route('user.searchJobs') }}" method="post">
									@csrf
									<div class="form-row">
										<div class="form-group col-xl-4 col-lg-3 col-md-6">
											<input type="text" name="job" class="form-control my-2 my-lg-1" id="inputtext4"
												placeholder="What are you looking for">
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<select name="category" class="w-100 form-control mt-lg-1 mt-md-2">
												<option hidden>Category</option>
												<option value="Computer & IT">Computer & IT</option>
												<option value="Management">Management</option>
												<option value="FinanceSales">FinanceSales</option>
												<option value="Marketing">Marketing</option>
												<option value="Business">Business</option>
												<option value="Accounting">Accounting</option>
												<option value="Science & Engineering">Science & Engineering</option>
												<option value="Human Resources">Human Resources</option>
												<option value="Restaurant & Hospitality">Restaurant & Hospitality</option>
												<option value="Real Estate">Real Estate</option>
												<option value="Transportation & Logistics">Transportation & Logistics</option>
											</select>
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<input type="text" name="location" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Location">
										</div>
										<div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
											<button type="submit" class="btn btn-primary active w-100">Search Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--section -->

<section class="popular-deals section bg-white">
	<div class="container">
		<div class="row">
			<div class="col">
			<!-- list  -->
			@foreach($alljobs as $job)

			<div class="ad-listing-list">
					<div class="row p-lg-3 p-sm-5 p-4">
						<div class="col-lg-4 align-self-center">
							<a href="/detail/{{$job->id}}">
								<img src="{{$job->image}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-8 col-md-10">
									<div class="ad-listing-content">
										<div>
											<a href="/detail/{{$job->id}}" class="font-weight-bold">{{$job->title}}</a>
										</div>
										<ul class="list-inline mt-2 mb-3">
											<li class="list-inline-item">{{$job->position}}</li>
											<li class="list-inline-item"><i class="pl-4 pr-2 fa fa-briefcase"></i>{{$job->type}}</li>
										</ul>
										<div class="row"><i class="pl-3 fa fa-money"></i><p class="pl-2">{{$job->salary_range}}</p></div>
										<p class="pr-5">{{$job->description}}</p>
									</div>
								</div>
								<div class="col-sm-3 align-self-center">
									<a href="{{ route('user.applyForJob') }}" class="font-weight-bold">
										<button type="submit" class="btn btn-primary active w-100 mb-4">Apply</button>
									</a>
									<a class="p-4 mt-4 ml-2" href="/detail/{{$job->id}}">
										Read More 
									</a>
								</div>
							</div>
						</div>
					</div>
				
			</div>
			@endforeach
			<!-- list  -->
			
			<!-- pagination -->
			<div class="pagination justify-content-center pt-4">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="">1</a></li>
						<li class="page-item"><a class="page-link" href="">2</a></li>
						<li class="page-item"><a class="page-link" href="">3</a></li>
						<li class="page-item">
							<a class="page-link" href="" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<!-- pagination -->
			</div>
			
				
		</div>
	</div>
</section>



@endsection