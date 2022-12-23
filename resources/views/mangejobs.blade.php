@extends("company")
@section("listview")


    <!-- Recently Favorited -->
    <div class="widget dashboard-container my-adslist">
      <table class="table table-responsive product-dashboard-table">
        <thead>
          <tr>
            <th>Description</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($jobs as $job)
            <tr>
              <td class="product-details">
                <div class="d-flex flex-column">
                  <h3 class="title pl-2">{{$job->title}}</h3>
                  <div class="p-2"><span ><strong>Job Position:</strong>{{$job->position}}</span></div>
                  <div class="p-2"><span><strong>Type: </strong>{{$job->type}}</span></div>
                  <div class="p-2"><span class="status active"><strong>Salary:</strong>{{$job->salary_range}}</span></div>
                  <div class="p-2"><span><strong>Description:</strong>{{substr(strip_tags($job->description), 0, 50)}} ...</span></div>
              </div>    
              </td>
              <td class="action" data-title="Action">
                <div class="">
                  <ul class="list-inline justify-content-center">
                    <li class="list-inline-item">
                      <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="">
                        <i class="fa fa-pencil"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="">
                        <i class="fa fa-trash"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>

  @endsection