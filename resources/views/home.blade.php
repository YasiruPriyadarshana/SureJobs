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
								<form>
									<div class="form-row">
										<div class="form-group col-xl-4 col-lg-3 col-md-6">
											<input type="text" class="form-control my-2 my-lg-1" id="inputtext4"
												placeholder="What are you looking for">
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<select class="w-100 form-control mt-lg-1 mt-md-2">
												<option hidden>Category</option>
												<option value="1">Computer & IT</option>
												<option value="4">Management</option>
												<option value="2">FinanceSales</option>
												<option value="1">Marketing</option>
												<option value="4">Business</option>
												<option value="2">Accounting</option>
												<option value="1">Science & Engineering</option>
												<option value="4">Human Resources</option>
												<option value="2">Restaurant & Hospitality</option>
												<option value="2">Real Estate</option>
												<option value="4">Transportation & Logistics</option>
											</select>
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Location">
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
							<a href="">
								<img src="{{$job->image}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-8 col-md-10">
									<div class="ad-listing-content">
										<div>
											<a href="single.html" class="font-weight-bold">{{$job->title}}</a>
										</div>
										<ul class="list-inline mt-2 mb-3">
											<li class="list-inline-item"><a href="category.html"> <i class="fa fa-folder-open-o"></i>{{$job->position}}</a></li>
											<li class="list-inline-item"><a href="category.htm"><i class="fa fa-calendar"></i>{{$job->type}}</a></li>
										</ul>
										<p class="pr-5">{{$job->salary_range}}</p>
										<p class="pr-5">{{$job->description}}</p>
									</div>
								</div>
								<div class="col-sm-3 align-self-center">
										<button type="submit" class="btn btn-primary active w-100">Apply</button>
									
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
							<a class="page-link" href="ad-list-view.html" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="ad-list-view.html">1</a></li>
						<li class="page-item"><a class="page-link" href="ad-list-view.html">2</a></li>
						<li class="page-item"><a class="page-link" href="ad-list-view.html">3</a></li>
						<li class="page-item">
							<a class="page-link" href="ad-list-view.html" aria-label="Next">
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