@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
                <div class="card shadow mb-12 border-left-primary">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary"><strong>{{Route::currentRouteName()}}</strong></h6>
                        </div>
                        <div class="card-body">
                          
                          <table class="table table-hover">
                            <tbody>
                            <tr>
                                    <td>First Name</td>
                                    <td>{{$trainee->first_name}}</td>
                            </tr>  
                            <tr>
                                    <td>Last Name</td>
                                    <td>{{$trainee->last_name}}</td>
                            </tr>      
                            <tr>
                                    <td>Email</td>
                                    <td>{{$trainee->email}}</td>
                            </tr> 
                            <tr>
                                <td>Phone</td>
                                <td>{{$trainee->phone}}</td>
                            </tr> 

                            <tr>
                                    <td>Package</td>                                    
                                    <td>{{$trainee->package}}</td>
                            </tr>  

                            <tr>
                                    <td>Engineering Exp</td>                                    
                                    <td>{{$trainee->enginer_know_how}}</td>
                            </tr>  

                            <tr>
                                    <td>Address</td>                                    
                                    <td>{{$trainee->address}}</td>
                            </tr>  

                            
                            <tr>
                              <td>Status</td>                                    
                              <td>@if ($trainee->paid)
                                  Paid
                              @else
                                  Not Paid
                              @endif
                            </td>
                            <tr>
                              <td>Amount</td>                                    
                              <td>&#8358; {{$trainee->payment->paymentAmount ?? ""}}</td>
                      </tr>  
                      </tr>  
                            
                            
                          </tbody>
                        </table>

                        <div>
                                
                                      
                                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#MessageModal">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Email User</span>
                                      </a>
                                      
                                      
                                      

                                      
                                      
                        </div>
                        </div>
                      </div>
        </div>
    </div>
</div>

<!-- Message Modal-->
<div class="modal fade" id="MessageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/admin/message/send" method="post">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send User a Message</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
            <input type="email" name="email" placeholder="email" value="{{$trainee->email}}" class="form-control mb-3" required>

            <input type="text" name="name" value="{{$trainee->first_name}} {{$trainee->last_name}}" class="form-control mb-3" required hidden>
          
            <input type="text" name="subject" placeholder="subject" class="form-control mb-3" required>

            <textarea name="message" id="" cols="30" rows="10" class="form-control mb-3" required placeholder="Message"></textarea>
            

        </div>
        
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" type="submit">send Message</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection
