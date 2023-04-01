@extends('layouts.admin')

@section('content')

<main id="page-wrapper">
  <div class="container-fluid">
    <div class="page-header d-flex">
      <div class="heading page-header-item">
        <h6 class="h6">Order</h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">Reohob</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Order
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="card card-shadow p-3">
      <h6 class="h6 card-title">Order List</h6>
      <table id="datatable" class="table table-primary mb-0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Delivery</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Date</th>
            <th class="dt-bg-trans"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b>#1345</b></td>
            <td><b>Mony Naroola</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1346</b></td>
            <td><b>Mario Speedwagon</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1347</b></td>
            <td><b>Petey Cruiser</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1349</b></td>
            <td><b>Anna Sthesia</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1334</b></td>
            <td><b>Paul Molive</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1352</b></td>
            <td><b>Anna Mull</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1356</b></td>
            <td><b>Gail Forcewind</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1366</b></td>
            <td><b>Paige Turner</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1349</b></td>
            <td><b>Bob Frapples</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
          <tr>
            <td><b>#1340</b></td>
            <td><b>Walter Melon</b></td>
            <td>Post</td>
            <td>$1000</td>
            <td>In Stock</td>
            <td>02.09.2018, 01:13</td>
            <td>
              <a href="javascript:void(0)"
                ><i class="mi mi-delete"></i
              ></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    {{-- <footer class="text-center mb-4">© 2018 Dashto by kri8thm.com</footer> --}}
  </div>
</main>

@endsection
