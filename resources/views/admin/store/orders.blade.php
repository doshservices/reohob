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
            <th>Order Id</th>
            <th>Product</th>
            <th>Payment Status</th>
            <th>Payment Method</th>
            <th>Order Status</th>
            <th>Date</th>
            <th>Total</th>
            {{-- <th class="dt-bg-trans"></th> --}}
          </tr>
        </thead>
        <tbody>
            @if (count($orders))
            @foreach ($orders as $order)
                <tr>
                    <td><a href="/admin/orders/{{$order->id}}">{{$order->id}}</a></td>
                    <td>
                        <div class="d-flex">
                            @foreach ($order->orderDetail as $orderDetail)
                            
                            {{$orderDetail->product->name}} <br>

                            @endforeach
                            
                        </div>
                    </td>
                    <td>
                        

                            @if ($order->transaction->paymentStatus == 'success')
                            <span class="badge badge-success">{{$order->transaction->paymentStatus}}</span>
                            @else
                            <span class="badge badge-warning">{{$order->transaction->paymentStatus}}</span>
                            @endif
                    </td>
                    <td>{{$order->payment_method}}</td>
                    <td>

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
                            <span class="badge badge-primary">{{$order->status}}</span>
                        @endif

                    </td>
                    <td>{{date('d  M  Y', strtotime($order->created_at))}} </td>
                    <td>&#8358;{{ number_format($order->total, 2)}}</td>
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
