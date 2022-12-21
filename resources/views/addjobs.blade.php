@extends("layout")
@section("content")

<section class="advt-post bg-gray py-5">
    <div class="container">
      <form action="{{ route('company.create_job') }}" method="post" >
        @csrf
        <!-- form -->
        <fieldset>
          <div class="row">
            <div class="col-lg-8">
              <h3>Add New Job Title</h3>
            </div>
            <div class="col-lg-8">
              <h6 class="font-weight-bold pt-4 pb-1">Job Title:</h6>
              <input type="text" class="form-control bg-white" name="title"  required>
              <h6 class="font-weight-bold pt-4 pb-1">Position:</h6>
              <input type="text" class="form-control bg-white" name="position"  required>
              <h6 class="font-weight-bold pt-4 pb-1">Salary Range:</h6>
              <input type="text" class="form-control bg-white" name="salary_range"  required>
              <h6 class="font-weight-bold pt-4 pb-1">Type:</h6>
              <div class="row mx-1 bg-white">
                <div class="col mr-lg-4 my-2 pt-2 pb-1 rounded">
                  <input type="radio" name="itemName" value="fultime" id="fultime" required>
                  <label for="personal" class="py-2">Full-time</label>
                </div>
                <div class="col mr-lg-4 my-2 pt-2 pb-1 rounded">
                  <input type="radio" name="itemName" value="parttime" id="parttime" required>
                  <label for="business" class="py-2">Part-time</label>
                </div>
                <div class="col mr-lg-4 my-2 pt-2 pb-1 rounded">
                  <input type="radio" name="itemName" value="internship" id="internship" required>
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

