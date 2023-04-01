@extends('layouts.admin')

@section('content')

<main id="page-wrapper">
  <div class="container-fluid">
    <div class="page-header d-flex">
      <div class="heading page-header-item">
        <h6 class="h6">{{Route::currentRouteName()}}</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">Reohob</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              {{Route::currentRouteName()}}
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="card card-shadow p-3">
        <h6 class="h6 card-title">{{Route::currentRouteName()}}</h6>
        
        {{-- <div class="table-responsive profile-table"> --}}
          <table class="table">
              <tbody>
              <tr>
                  <td>Product name:</td>
                  <td> {{$product->name}} </td>
              </tr>
              <tr>
                  <td>Product Desc:</td>
                  <td> {{$product->description}}  </td>
              </tr>
              <tr>
                <td>Categories:</td>
                <td> @foreach ($product->categories as $cat)
                  {{$cat->name}}
                    @endforeach 
               </td>
              </tr>
              <tr>
                  <td>Quantity:</td>
                  <td> {{$product->quantity}}  </td>
              </tr>
              <tr>
                  <td>Amount:</td>
                  <td> {{$product->price}}  </td>
              </tr>
  
              <tr>
                  <td>Image:</td>
                  <td> <img src="/images/products/{{$product->main_image}}" alt="">  </td>
              </tr>
              
              </tbody>
          </table>
          <div>
            <a class="btn btn-primary" href="/admin/products/{{$product->sku}}/edit">Edit Product</a>
          </div>
        {{-- </div> --}}
  
      </div>
    </div>
    {{-- <footer class="text-center mb-4">© 2018 Dashto by kri8thm.com</footer> --}}
  </div>
</main>

@endsection
