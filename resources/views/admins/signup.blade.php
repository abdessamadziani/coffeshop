@extends('layout')
@section('title','Sign up')


@section('content')
<div class="container m-3"> <h2 class="text-success">Here You Can Sign up</h2></div>

<div class="container" >

<section class=" d-flex   justify-content-between ">
    <div style="width:40%">
    <img src="/imgs/loginimg.png" style="width:100%" alt="">
    </div>
    <div  class=" col-12 col-sm-8 col-md-6 col-lg-5 my-card card p-4 mt-3  mb-3 ">


        <div class="card-body my-0">
          <h5 class="card-title border-start border-warning border-5 fw-bold  fs-2 ps-2 ">Sign up<h5>
            <form action="" method="POST" >

                @csrf
             <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="titre" placeholder="Enter the title of your product" value="{{old('titre')}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">email</label>
                <input type="text" name="email" class="form-control" id="titre" placeholder="Enter the title of your product" value="{{old('titre')}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">password</label>
                <input type="password" name="password" class="form-control" id="titre" placeholder="Enter the title of your product" value="{{old('titre')}}">
              </div>



            <input class="btn btn-info w-100 text-white text-capitalize mt-0 " type="submit" name="add" value="Add">

          </form>
        </div>

    </div>

    </section>
</div>
@endsection
