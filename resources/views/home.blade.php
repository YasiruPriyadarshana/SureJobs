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

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Top Jobs</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection