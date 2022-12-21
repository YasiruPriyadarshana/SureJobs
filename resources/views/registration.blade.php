@extends("layout")
@section("content")

@push('scripts')
<!-- Scripts -->
<script language="JavaScript" type="text/javascript">
  function HandleBrowseClick()
  {
      var fileinput = document.getElementById("file-upload");
      var textinput = document.getElementById("filename");

      newStr = fileinput.value.replace('fakepath','...')
      textinput.innerHTML = newStr;
  }
</script>

@endpush



<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 align-item-center">
        <div class="border">
          @if ($id == "user")
            <h3 class="bg-gray p-4">Registration</h3>
          @else {{-- company --}}
          <h3 class="bg-gray p-4">Register Your Company</h3>
          @endif

          <form action="{{url('user/'.$id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset class="p-4">
                {{-- <h6 class="font-weight-bold pt-4 pb-1">Full Name:</h6> --}}
              @if ($id == "user")
                <input class="form-control mb-3" name="name" type="text" placeholder="Full Name" required>
              @else {{-- company --}}
                <input class="form-control mb-3" name="name" type="text" placeholder="Company Name" required>
              @endif

              <input class="form-control mb-3" name="email" type="text" placeholder="Email Address" required>
              <input class="form-control mb-3" name="password" type="password" placeholder="Password" required>

              @if ($id == "user")
                <input class="form-control mb-3" name="mobile" type="number" placeholder="Mobile Number" required>
                <input class="form-control mb-3" name="address" type="text" placeholder="Address" required>
                <input class="form-control mb-3" name="nic" type="text" placeholder="NIC" required>
                <label class="font-weight-bold text-dark pt-4 pl-2">CV:</label>
                <div class="choose-file text-center my-4 py-3 rounded bg-light">
                  <label for="file-upload">
                    <span class="d-block font-weight-bold text-dark">Drop file anywhere to upload</span>
                    <span class="d-block">or</span>
                    <span class="d-block btn bg-primary text-white my-3 select-files">Upload CV</span>
                    <span class="d-block">Maximum upload file size: 10 MB</span>
                    <label id="filename"></label>
                    <input type="file" class="form-control-file d-none" id="file-upload" name="file" onchange="HandleBrowseClick();">
                  </label>
                </div>
              @else {{-- company --}}
                <input class="form-control mb-3" name="location" type="text" placeholder="Location" required>
                
                
                <label class="font-weight-bold text-dark pt-4 pl-2">Description:</label>
                <textarea name="description" id="description" class="form-control bg-white" rows="7"
                  placeholder="Write details about your company" required></textarea>
                  <label class="font-weight-bold text-dark pt-4 pl-2">Company Photo:</label>
                <div class="choose-file text-center my-4 py-3 rounded bg-light">
                  <label for="file-upload">
                    <span class="d-block font-weight-bold text-dark">Drop file anywhere to upload</span>
                    <span class="d-block">or</span>
                    <span class="d-block btn bg-primary text-white my-3 select-files">Upload</span>
                    <label id="filename"></label>
                    <input type="file" class="form-control-file d-none" id="file-upload" name="file" onchange="HandleBrowseClick();">
                  </label>
                </div>
              @endif
              
              <div>
                <input type="checkbox" id="keep-me-logged-in">
                <label for="terms-&-condition" class="ml-2 mb-2">By click you must agree with our
                    <span> <a class="text-success" href="/terms-condition">Terms & Condition and Posting
                        Rules.</a></span>
                  </label>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary font-weight-bold mt-3">Register Now</button>
              </div>
              
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection