
@extends("layout")
@section("content")

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border">
          <h3 class="bg-gray p-4">Login Now</h3>
          <form action="{{ route('auth.validate_login') }}" method="post">
            @csrf
            <fieldset class="p-4">
              <input class="form-control mb-3" name="email" type="email" placeholder="User Email address" required>
              <input class="form-control mb-3" name="password" type="password" placeholder="Password" required>
              <div class="loggedin-forgot">
                <input type="checkbox" id="keep-me-logged-in">
                <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
              </div>
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">Log in</button>
              <a class="mt-3 d-block text-primary" href="#!">Forget Password?</a>
              <a class="mt-3 d-inline-block text-primary" href="registration/user">Register Now</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection