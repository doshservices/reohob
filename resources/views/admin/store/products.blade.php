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
        <br>
        <div>
          <a class="btn btn-primary" href="/admin/create-product">Add Product</a>
        </div>
      </div>
    </div>
    <div class="card card-shadow p-3">
      <h6 class="h6 card-title">{{Route::currentRouteName()}} List</h6>
      <table id="datatable" class="table table-striped mb-0">
        <thead>
          <tr>
            <!--<th>S/N</th>-->
            <th>SKU</th>
            <th>Name</th>
            <th>Categories</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Date</th>
            <th class="dt-bg-trans"></th>
          </tr>
        </thead>
        <tbody>

        @if (count($products))
        @foreach ($products as $product)

          <tr>
            <!--<td><b><a href="/admin/products/{{$product->sku}}">0</a></b></td>-->
            <td><b><a href="/admin/products/{{$product->sku}}">#{{$product->sku}}</a></b></td>
            <td>{{$product->name}}</td>
            <td>
              @foreach ($product->categories as $cat)
                {{$cat->name}}
            @endforeach
            </td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>

            <td>{{date('d  M  Y', strtotime($product->created_at))}} </td>

            {{-- <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td> --}}

            <td>
                <a href="/admin/products/{{$product->sku}}/edit" class="mr-3"><i class="fa fa-pencil"></i></a>
                <a href="#" class="delete delete-product" data-id="{{$product->id}}" class="mr-3"><i class="fa fa-trash"></i></a>
            </td>
          </tr>

          @endforeach
        @endif
          
          
        </tbody>
      </table>
    </div>
    {{-- <footer class="text-center mb-4">© 2018 Dashto by kri8thm.com</footer> --}}
  </div>
</main>

@endsection

@section('script')
<script>

$(document).ready(function () {

    // $(".delete-product").click(function (e) {
    $(document).on("click",".delete-product",function(e){
            
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure you want to delete this product?")) {
                $.ajax({
                    url: '/admin/product-remove',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location = "/admin/products";
                    }
                });
            }
    });


        
});

</script>
@endsection