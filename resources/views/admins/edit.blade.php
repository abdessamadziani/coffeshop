@extends('layout')
@section('title','Edit')


@section('content')


<div class="container m-3"> <h2 class="text-success">Here You Can edit Your Plats</h2></div>

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

            <form action="{{route('update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="id" value="{{$product->id}}">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">name</label>
                <input type="text" name="titre" class="form-control" id="titre" value="{{$product->titre}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">prix</label>
                <input type="number" name="prix" class="form-control" id="prix" value="{{$product->prix}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">image</label>
                <input type="file" name="img" class="form-control" id="img">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{$product->description}}</textarea>
              </div>


              <button type="submit"  class="btn btn-info text-white">update</button>

          </form>
        </div>
    </div>

    </section>
</div>
@endsection
