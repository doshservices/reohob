@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><strong>{{Route::currentRouteName()}}</strong></h3></div>
                <table class="table table-hover">
                    <thead>
                      <tr>
                          
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Date Created</th>
                      </tr>
                    </thead>
                    <tbody>

                      @if (count($orders))
                      <?php $numbering = 1; ?>
                        @foreach ($orders as $order)
                          
                        <tr>
                      
                              <td><?php echo $numbering++ ?></td> 
                              <td><a href="/admin/quote-requests/{{$order->id}}">{{$order->full_name}}</a></td>
                              <td>{{$order->location}}</td>
                              <td>{{$order->email}}</td>
                              <td>{{$order->phone}}</td>
                              <td>{{$order->service->name ?? ''}}</td>
                              <td>{{$order->created_at->format('d-m-Y')}}</td>
                              
                          
                        </tr>    

                        @endforeach
                      @else
                          
                      @endif
                      
                        
                    </tbody>
                  </table>
                  <ul class="pagination">
                      {{$orders->render("pagination::bootstrap-4")}}
                    </ul>
            </div>
        </div>
    </div>
</div>

@endsection
