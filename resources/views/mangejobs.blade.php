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
          <tr>
            <td class="product-details">
              <h3 class="title">Title</h3>
              <span class="add-id"><strong>Job Position:</strong> SE</span>
              <span><strong>Type: </strong><time>Full time</time> </span>
              <span class="status active"><strong>Salary</strong>$100000</span>
              <span class="location"><strong>Description</strong>desc</span>
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
          
        </tbody>
      </table>

    </div>

  @endsection