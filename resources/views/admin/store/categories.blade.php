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
          <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#catModal">Add Categories</a>
        </div>

      </div>
    </div>
    <div class="card card-shadow p-3">
      <h6 class="h6 card-title">{{Route::currentRouteName()}} List</h6>
      <table id="datatable" class="table table-primary mb-0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Date</th>
            <th class="dt-bg-trans"></th>
          </tr>
        </thead>
        <tbody>

        @if (count($categories))
        @foreach ($categories as $category)

          <tr>
            {{-- <td><b><a href="/admin/categories/{{$category->id}}">#{{$category->id}}</a></b></td> --}}
            <td><b><a href="#">#{{$category->id}}</a></b></td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>

            <td>{{date('d  M  Y', strtotime($category->created_at))}} </td>

            {{-- <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td> --}}

            <td>
                <a href="/admin/categories/{{$category->id}}/edit" class="mr-3"><i class="fa fa-pencil"></i></a>
                
                <a href="#" type="buttton" class="remove-category-btn" data-id="{{$category->id}}"><i class="fa fa-remove"></i></a>
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

{{-- change category modal  --}}
<div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/admin/categories" method="post">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <label class="font-weight-bold">Name</label>
          <input type="text" name="name" class="form-control mb-3" required>

          <label class="font-weight-bold">Category description</label>
          <textarea name="description" id="" class="form-control mb-3"></textarea>
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" type="submit">Add category</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection


@section('script')
<script>

$(document).ready(function () {

    // $(".remove-category-btn").click(function (e) {
    $(document).on("click",".remove-category-btn",function(e){
            
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure you want to delete this category?")) {
                $.ajax({
                    url: '/admin/category-remove',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location = "/admin/categories";
                    }
                });
            }
    });


        
});

</script>
@endsection