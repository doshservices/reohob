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
                  <td>First name:</td>
                  <td> {{$user->first_name}} </td>
              </tr>
              <tr>
                    <td>Last name:</td>
                    <td> {{$user->last_name}} </td>
              </tr>   
              <tr>
                  <td>Email:</td>
                  <td> {{$user->email}} </td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td>{{$user->phone}}</td>
              </tr>
              
              
              </tbody>
          </table>
        {{-- </div> --}}
  
      </div>
    </div>
    {{-- <footer class="text-center mb-4">© 2018 Dashto by kri8thm.com</footer> --}}
  </div>
</main>

@endsection
