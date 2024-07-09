@extends('user.layout.app')
@section('content')

  <h1 class="text-center">Login page</h1>



  <section id="contact" class="contact section">

<div class="container" data-aos="fade">

  <div class="row gy-5 gx-lg-5">



    <div class="col-lg-12">
      <form action="{{route('user-login-post')}}" method="post">
        @csrf
        <div class="row">


          <div class="form-group mt-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
        </div>

          <div class="form-group mt-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
        </div>



        </div>


        
        <div class="text-center mt-3"><button type="submit" class="btn btn-success">Login</button></div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>

</section><!-- /Contact Section -->
@endsection