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
          <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#adminModal">Add Admin</a>
        </div>
      </div>
    </div>
    <div class="card card-shadow p-3">
      <h6 class="h6 card-title">{{Route::currentRouteName()}} List</h6>
      <table id="datatable" class="table table-primary mb-0">
        <thead>
          <tr>
              
            <th>S/N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date Created</th>
            <th class="dt-bg-trans"></th>

          </tr>
        </thead>
        <tbody>

          @if (count($admins))
          <?php $numbering = 1; ?>
            @foreach ($admins as $admin)
              
            <tr>
          
                  <td><?php echo $numbering++ ?></td> 

                  <td>
                      {{-- <a href="/admin/administrators/{{$admin->id}}">{{$admin->first_name}} {{$admin->last_name}}</a> --}}

                      <a href="#">{{$admin->first_name}} {{$admin->last_name}}</a>
                    </td>
                  <td>{{$admin->email}}</td>
                  <td>{{$admin->phone}}</td>
                  <td>{{$admin->created_at->format('d-m-Y')}}</td>

                  <td>
                        <a href="#" class="delete delete-admin" data-id="{{$admin->id}}" class="mr-3"><i class="fa fa-trash"></i></a>
                </td>
                  
              
            </tr>    

            @endforeach
          @else
              
          @endif
          
            
        </tbody>
      </table>
    </div>
    {{-- <footer class="text-center mb-4">© 2018 Dashto by kri8thm.com</footer> --}}
  </div>
</main>

<!-- administrators Modal-->
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/admin/administrators" method="post">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Admin</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
            <input type="email" name="email" placeholder="email" class="form-control mb-3" required>

            <input type="text" name="first_name"  class="form-control mb-3" placeholder="First Name" required>


            <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-3" required>


            <input type="tel" name="phone" placeholder="Phone"  class="form-control mb-3" required>

            <input type="password" name="password" placeholder="Password"  class="form-control mb-3" required>


        </div>
        
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" type="submit">Create Admin</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection


@section('script')
<script>

$(document).ready(function () {

    $(".delete-admin").click(function (e) {
            
            e.preventDefault();
            var ele = $(this);
 
            if(confirm("Are you sure you want to delete this admin?")) {
                $.ajax({
                    url: '/admin/administrators',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location = "/admin/administrators";
                    }
                });
            }
    });


        
});

</script>
@endsection