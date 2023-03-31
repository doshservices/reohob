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
    <div class="card card-shadow p-3">
      <h6 class="h6 card-title">{{Route::currentRouteName()}}</h6>
      <form action="/admin/categories/{{$category->id}}/edit" method="POST" class="row">

        @csrf
        <div class="col-sm-6 form-field">
          <label for="name" class="form-label" >Category name</label>
          <input
            type="text"
            id="name"
            placeholder="Enter Category name"
            class="form-control"
            name="name" value="{{$category->name}}"
          />
        </div>
        <div class="col-sm-6 form-field">
            <label for="name" class="form-label" >Category Description</label>
            
            <textarea name="description" id="" class="form-control" rows="10" required>{{$category->description}}</textarea>
        </div>
        </div>
        
        

       
        

        
       

        <div class="col-12">
          <input
            type="submit"
            class="btn btn-primary"
          />
        </div>
      </form>
    </div>
    {{-- <footer class="text-center mb-4">© 2018 Dashto by kri8thm.com</footer> --}}
  </div>
</main>

@endsection
