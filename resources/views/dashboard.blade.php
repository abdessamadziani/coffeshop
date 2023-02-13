
@extends('layout')
<x-app-layout>

    @if(Session::has('msg'))
    <div class="container p-1">
    <p class="alert alert-success">{{ Session::get('msg') }}</p>
    </div>
    @endif
@section('content')

<header   class=" header d-flex justify-content-center mt-3">

    <div class="card-items row container  ">
        <div class="card-item card-1 col-12 col-md-6  col-lg-2 px-3  ">
        <i class=" icon fas fa-music mt-0  fs-3 text-info"></i>
            <h2 class="text-capitalize   pt-1">Products</h2>
            <span class="text-Secondary fw-bold fs-3 "></span>
        </div>
        <div class="card-item card-2 col-12 col-md-6  col-lg-2 ">
        <i class=" icon fas fa-money-check-alt fs-3 text-info"></i>
            <h2 class="text-capitalize   pt-1">Admins</h2>
            <span class=" fw-bold text-Secondary fs-3"></span>
        </div>

        <div class="card-item card-3 col-12 col-md-6  col-lg-2 ">
        <i class=" icon fas fa-chart-line text-info fs-3"></i>
            <h2 class="text-capitalize  pt-1">test</h2>
            <span class="text-Secondary fw-bold fs-3"></span>
        </div>

        <div class="card-item card-4 col-12 col-md-6  col-lg-2 ">
            <i class=" icon fas fa-user-alt text-info fs-3"></i>
            <h2 class="text-capitalize   pt-1">test</h2>
            <span class=" fw-bold fs-3 text-Secondary text-uppercase"></span>
        </div>
    </div>

    <div class="container ">
        <div class="m-4">
            <a  href="{{route('admins.create')}}" class="btn btn-info text-white">Add New</a>
        </div>

    <table class=" table table-responsive">
        <thead>
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Remove</th>
            <th scope="col">Edit</th>


          </tr>
        </thead>
        <tbody class="table-group-divider">

          @foreach($produits as $product)
          <tr>
            <td>{{$product->titre}}</td>
            <td>{{$product->prix}}</td>
            <td>{{$product->description}}</td>
            <td style='height:70px;' ><img class="rounded-circle  h-100 "  src="./imgs/{{$product->product_photo_path}}" alt="img"></td>
            <td><a href="{{route('admins.edit',$product->id)}}" class="btn btn-warning p-3 text-white" name="edit" data-bs-target="#exampleModal2">Edit</a></td>
            <td><a href="{{route('admins.delete',$product->id)}}" class="btn btn-danger p-3" name="delete">delete</a></td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
</header>


@endsection

</x-app-layout>
