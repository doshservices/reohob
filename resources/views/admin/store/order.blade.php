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
                    <th style="text-align: left;
                    padding: 8px;">Order ID</th>
                    <th style="text-align: left;
                    padding: 8px;">{{$order->id}}</th>
                  </tr>

                  <tr>
                    <th style="text-align: left;
                    padding: 8px;">Buyer Name</th>
                    <th style="text-align: left;
                    padding: 8px;">{{$order->user->first_name}} {{$order->user->last_name}}</th>
                  </tr>

                  <tr>
                    <th style="text-align: left;
                    padding: 8px;">Buyer Email</th>
                    <th style="text-align: left;
                    padding: 8px;">{{$order->user->email}}</th>
                  </tr>

                  <tr>
                    <th style="text-align: left;
                    padding: 8px;">Buyer Phone</th>
                    <th style="text-align: left;
                    padding: 8px;">{{$order->user->phone}}</th>
                  </tr>

                  <tr>
                      <th style="text-align: left;
                      padding: 8px;">Deivery Address</th>
                      <th style="text-align: left;
                      padding: 8px;">{{$order->user->address ?? ''}}</th>
                  </tr>

                  <tr>
                      <th style="text-align: left;
                      padding: 8px;">Deivery city</th>
                      <th style="text-align: left;
                      padding: 8px;">{{$order->user->city ?? ''}}</th>
                  </tr>

                  <tr>
                      <th style="text-align: left;
                      padding: 8px;">Deivery State</th>
                      <th style="text-align: left;
                      padding: 8px;">{{$order->user->state ?? ''}}</th>
                  </tr>

                  <tr>
                    <th style="text-align: left;
                    padding: 8px;">Sub Total</th>
                    <th style="text-align: left;
                    padding: 8px;">&#8358;{{ number_format($order->subtotal, 2)}}</th>
                  </tr>

                    <tr>
                    <th style="text-align: left;
                    padding: 8px;">Total</th>
                    <th style="text-align: left;
                    padding: 8px;">&#8358;{{ number_format($order->transaction->amount, 2)}}</th>
                    </tr>

                    <tr>
                    <th style="text-align: left;
                    padding: 8px;">Payment Method</th>
                    <th style="text-align: left;
                    padding: 8px;">{{$order->transaction->paymentType}}</th>
                    </tr>

                    <tr>
                    <th style="text-align: left;
                    padding: 8px;">Payment Status</th>
                    <th style="text-align: left;
                    padding: 8px;">
                    @if ($order->transaction->paymentStatus == 'success')
                    <span class="badge badge-success">{{$order->transaction->paymentStatus}}</span>
                    @else
                    <span class="badge badge-warning">{{$order->transaction->paymentStatus}}</span>
                    @endif

                    </th>
                    </tr>

                    <tr>
                    <th style="text-align: left;
                    padding: 8px;">Order Status</th>
                    <th style="text-align: left;
                    padding: 8px;">
                    @if ($order->status == 'pending')
                        <span class="badge badge-warning">{{$order->status}}</span>
                        
                    @endif

                    @if ($order->status == 'delivered')
                    <span class="badge badge-success">{{$order->status}}</span>
                        
                    @endif
                    @if ($order->status == 'cancelled')
                    <span class="badge badge-danger">{{$order->status}}</span>
                    @endif

                    @if ($order->status == 'shipped')
                        <span class="badge badge-primary">Shipped</span>
                    @endif
                    
                    </th>
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
