@extends('layout')
@section('title','Create')


@section('content')
@auth
<div class="container m-3"> <h2 class="text-success">Here You Can Add Your Plats</h2></div>

{{-- <div class=" container">
    <form action="{{url('admins.dashboard')}}" method="HEAD">
        {!! csrf_field() !!}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">prix</label>
        <input type="number" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="btn btn-info text-white">Creer</button>
    </form>
</div> --}}

<div class="container" >

<section class=" d-flex   justify-content-between ">
    <div style="width:40%">
    <img src="/imgs/loginimg.png" style="width:100%" alt="">
    </div>
    <div  class=" col-12 col-sm-8 col-md-6 col-lg-5 my-card card p-4 mt-3  mb-3 ">
        @if($errors->any())
        <ul>
           @foreach($errors->all() as $error)
             <li class="text-danger ">{{$error}}</li>
          @endforeach
       </ul>
        @endif

        <div class="card-body my-0">
          <h5 class="card-title border-start border-warning border-5 fw-bold  fs-2 ps-2 ">Coffee Shop<h5>
            <form action="{{route('store')}}" method="POST"  enctype="multipart/form-data">

                @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">name</label>
                <input type="text" name="titre" class="form-control" id="titre" placeholder="Enter the title of your product" value="{{old('titre')}}">

              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">prix</label>
                <input type="number" name="prix" class="form-control" id="prix" placeholder="Enter the price of your product" value="{{old('prix')}}">

              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">image</label>
                <input type="file" name="img" class="form-control" id="img" value="{{old('image')}}">

              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter a discription about your product">{{old('description')}}</textarea>

              </div>

            <input class="btn btn-info w-100 text-white text-capitalize mt-0 " type="submit" name="add" value="Add">

          </form>
        </div>

    </div>

    </section>
</div>
@endauth
@endsection
