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
      <form action="/admin/edit-product/{{$product->sku}}" method="POST" class="row" enctype="multipart/form-data">

        @csrf
        <div class="col-sm-6 form-field">
          <label for="name" class="form-label" >Product name</label>
          <input
            type="text"
            id="name"
            placeholder="Enter product name"
            class="form-control"
            name="name" value="{{$product->name}}"
          />
        </div>
        <div class="col-sm-6 form-field">
          <label for="cat" class="form-label">Category</label>
          {{-- <input
            type="email"
            id="email"
            placeholder="johndeo.0645@xyz.com"
            class="form-control"
          /> --}}

        <select class="custom-select" name="categories[]" multiple>
            <option >--Select Category--</option>
            @if (count($categories))
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            @else
                
            @endif
        </select>
        </div>
        
        <div class="col-sm-6 form-field">
            <label for="name" class="form-label" >Product Description</label>
            

            <textarea name="description" id="" class="form-control" required>{{$product->description}}</textarea>
        </div>

        <div class="col-sm-6 form-field">
        <label for="name" class="form-label" >Product Qunatity</label>
        <input
            type="number"
            id="name"
            placeholder="Enter product quantity"
            class="form-control"
            name="quantity" value="{{$product->quantity}}"
        />
        </div>


        <div class="col-sm-6 form-field">
            <label for="name" class="form-label" >Product Price</label>
            <input
                type="number"
                id="name"
                placeholder="Enter product amount"
                class="form-control"
                name="amount" value="{{$product->price}}"
            />
        </div>

        <div class="col-sm-6 form-field">
            <label class="form-label">Product  images</label>
            <div class="custom-file">
              <input
                type="file"
                class="custom-file-input"
                id="customFile" name="images[]" accept="image/*" multiple
              />
              <label class="custom-file-label" for="customFile"
                >Choose image</label
              >
            </div>
        </div>

        <div class="col-sm-12 form-field">
            <label class="form-label">Main  image</label>
            <div class="custom-file">
              <input
                type="file"
                class="custom-file-input"
                id="customFile" name="main_image" accept="image/*"
              />
              <label class="custom-file-label" for="customFile"
                >Choose image</label
              >
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
