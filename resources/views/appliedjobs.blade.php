@extends("company")
@section("listview")


    <!-- Recently Favorited -->
    <div class="widget dashboard-container my-adslist">
      <table class="table table-responsive product-dashboard-table">
        <thead>
          <tr>
            <th style="width: 300px;">Employee</th>
            <th style="width: 500px;">Job</th>
            <th class="text-center">CV</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($employees as $employee)
            <tr>
              <td>
                <div class="d-flex flex-column">
                  
                  
                </div>  
                <div class="d-flex flex-column">
                  <div class="p-2"><span class="categories">{{$employee->name}}</span></div>
                  <div class="p-2"><span class="categories">{{$employee->mobile}}</span></div>
                  <div class="p-2"><span class="categories">{{$employee->address}}</span></div>
                  <div class="p-3"></div>
                </div>  
              </td>
              <td>
                <div class="d-flex flex-column">
                    <div class="p-2"><span ><strong>Job Position:</strong> SE</span></div>
                    <div class="p-2"><span><strong>Type: </strong><time>Full time</time> </span></div>
                    <div class="p-2"><span class="status active"><strong>Salary</strong>$100000</span></div>
                    <div class="p-2"><span><strong>Description</strong>desc</span></div>
                </div>      
              </td>
            
              <td class="action" data-title="Action">
                <div class="">
                  <ul class="list-inline justify-content-center">
                    <li class="list-inline-item">
                      <a class="view" href="{{ route('company.downloadCV', $employee->cv) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="fa fa-download"></i>
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

    <!-- pagination -->
    <div class="pagination justify-content-center">
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



  @endsection