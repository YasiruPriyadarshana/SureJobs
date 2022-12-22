@extends("company")
@section("listview")


    <!-- Recently Favorited -->
    <div class="widget dashboard-container my-adslist">
      <table class="table table-responsive product-dashboard-table">
        <thead>
          <tr>
            <th style="width: 300px;">Employee</th>
            <th style="width: 500px;">Description</th>
            <th class="text-center">CV</th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            <td>
                <span class="categories">Employee</span>
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
                    <a class="view" data-toggle="tooltip" data-placement="top" title="Edit" href="">
                      <i class="fa fa-download"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          
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