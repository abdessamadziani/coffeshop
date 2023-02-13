@extends('layout')
@section('title','Sign In')

@section('content')
<div class="container  ">
<section class=" d-flex   justify-content-between">
<div style="width:50%">
<img src="/imgs/loginimg.png" style="width:100%" alt="">

</div>
<div  class=" col-12 col-sm-8 col-md-6 col-lg-5 my-card card p-4 mt-3  ">
    <div class="card-body">
      <h5 class="card-title border-start border-warning border-5 fw-bold  fs-2 ps-2">Coffee Shop<h5>
      <h6 class="card-subtitle mb-2 text-muted text-capitalize text-center p-2 sb-title "><span class="text-dark fs-4 text-uppercase m-3">sign in </span> <br><br>
        enter your credentials to access your account</h6>
      <form action="../controllers/loginController.php" method="POST">


        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email" value="" placeholder="Enter your Email">
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter your password" value="">
        </div>
        <div class="mb-3 form-check form-switch ">
        <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" >
        <label class="form-check-label" for="exampleCheck1" >Remember me</label>
         </div>
        <input class="btn btn-info w-100 text-white text-capitalize" type="submit" name="signin" value="signin">
      </form>
      <div class="link text-center">
        <span class="text-muted fs-6">forgot your password ?<a href="#" class="card-link text-capitalize ">reset password</a>
        </span>
      </div>
      <a href=""><input class="btn btn-warning w-100 text-white text-capitalize" value="sign up"></a>

    </div>
</div>

</section>
</div>
@endsection
