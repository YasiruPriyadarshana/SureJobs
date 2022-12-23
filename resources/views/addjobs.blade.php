@extends("layout")
@section("content")

<section class="advt-post bg-gray py-5">

    <div class="container">

      @if(session()->has('message'))
      <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal();
        });
    </script>
    <div id="popupmodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Notification: Please read</h3>
        </div>
        <div class="modal-body">
            <p>
              {{ session()->get('message') }}
            </p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
      @endif

      <form action="{{ route('company.create_job', ['userid'=>$userid]) }}" method="post" >
        @csrf
        <!-- form -->
        <fieldset>
          <div class="row">
            <div class="col-lg-8">
              <h3>Add New Job Post</h3>
            </div>
            <div class="col-lg-8">
              <h6 class="font-weight-bold pt-4 pb-1">Job Title:</h6>
              <input type="text" class="form-control bg-white" name="title"  required>
              <h6 class="font-weight-bold pt-4 pb-1">Position:</h6>
              <input type="text" class="form-control bg-white" name="position"  required>
              <h6 class="font-weight-bold pt-4 pb-1">Salary Range:</h6>
              <input type="text" class="form-control bg-white" name="salary_range"  required>
              <h6 class="font-weight-bold pt-4 pb-1">Type:</h6>
              <div class="row mx-1 bg-white" role="group" >
                <div class="col mr-lg-4 my-2 pt-2 pb-1 rounded">
                  <input type="radio" name="type" value="Full-time" id="fulltime" required>
                  <label for="personal" class="py-2">Full-time</label>
                </div>
                <div class="col mr-lg-4 my-2 pt-2 pb-1 rounded">
                  <input type="radio" name="type" value="Part-time" id="parttime" required>
                  <label for="business" class="py-2">Part-time</label>
                </div>
                <div class="col mr-lg-4 my-2 pt-2 pb-1 rounded">
                  <input type="radio" name="type" value="Internship" id="internship" required>
                  <label for="business" class="py-2">Internship</label>
                </div>
              </div>
              <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
              <textarea name="description" id="description" class="form-control bg-white" rows="7"
                placeholder="Write Job Description Here" required></textarea>

                <!-- submit button -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary d-block mt-2">Post Your Ad</button>
                </div>
            </div>
          </div>
           
        </fieldset>
  
      </form>
    </div>



  </section>

@endsection

