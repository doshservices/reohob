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
                        <th>Email</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Date Created</th>
                      </tr>
                    </thead>
                    <tbody>

                      @if (count($trainees))
                      <?php $numbering = 1; ?>
                        @foreach ($trainees as $trainee)
                          
                        <tr>
                      
                              <td><?php echo $numbering++ ?></td> 
                              <td><a href="/admin/trainees/{{$trainee->id}}">{{$trainee->email}}</a></td>
                              <td>{{$trainee->first_name}}</td>
                              <td>{{$trainee->last_name}}</td>
                              <td>{{$trainee->phone}}</td>
                              <td>
                                @if ($trainee->paid)
                                    PAID
                                @else
                                    NOT PAID
                                @endif
                              </td>
                              <td>{{$trainee->created_at->format('d-m-Y')}}</td>
                              
                        </tr>    

                        @endforeach
                      @else
                          
                      @endif
                      
                        
                    </tbody>
                  </table>
                  <ul class="pagination">
                      {{$trainees->render("pagination::bootstrap-4")}}
                    </ul>
            </div>
        </div>
    </div>
</div>

@endsection
