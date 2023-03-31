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
      <h6 class="h6 card-title">{{Route::currentRouteName()}} List</h6>
      <table id="datatable" class="table table-primary mb-0">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Joined</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($users as $user)
            <tr>
              <td><a href="/user/{{$user->id}}">{{$user->id}}</a></td>
              <td>{{$user->first_name}}</td>
              <td>{{$user->last_name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->created_at}}</td>
            </tr>
          @endforeach

          
        </tbody>
      </table>
    </div>
    {{-- <footer class="text-center mb-4">© 2018 Dashto by kri8thm.com</footer> --}}
  </div>
</main>

@endsection
