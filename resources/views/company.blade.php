@extends("layout")
@section("content")

<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
      <!-- Row Start -->
      <div class="row">
        <div class="col-lg-4">
          <div class="sidebar">
            <!-- User Widget -->
            <div class="widget user-dashboard-profile">
              <!-- User Image -->
              <div>
                <img src="../storage/{{$company->image}}" alt=""  style="width: 300px; height:150px;">
              </div>
              <!-- User Name -->
              <h5 class="text-center">{{$company->name}}</h5>
              <p>{{$company->location}}</p>
              <a href="" class="btn btn-main-sm">Edit Profile</a>
            </div>
            <!-- Dashboard Links -->
            <div class="widget user-dashboard-menu">
              <ul>
                <li><a href=""><i class="fa fa-briefcase "></i>Jobs</a></li>
                <li><a href="{{ url('/registration/user') }}"><i class="fa fa-plus-circle "></i>Add Job Vacancies</a></li>
                <li><a href=""><i class="fa fa-users"></i>Applied Candidates</a></li>
                <li><a href=""><i class="fa fa-cog"></i> Logout</a></li>
                <li><a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete Account</a></li>
              </ul>
            </div>
            
            <!-- delete-account modal -->
            <!-- Modal -->
            <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <h6 class="py-2">Are you sure you want to delete your account?</h6>
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                  </div>
                  <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-center">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- delete-account modal -->
  
          </div>
        </div>
        <div class="col-lg-8">
         
            @yield("listview")
        </div>
      </div>
      <!-- Row End -->
    </div>
    <!-- Container End -->
  </section>

@endsection