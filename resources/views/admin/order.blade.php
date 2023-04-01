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
                                    <td>Full Name</td>
                                    <td>{{$order->full_name ?? ''}}</td>
                            </tr>    
                            <tr>
                                    <td>Email</td>
                                    <td>{{$order->email ?? ''}}</td>
                            </tr> 
                            <tr>
                                <td>Phone</td>
                                <td>{{$order->phone ?? ''}}</td>
                            </tr> 

                            <tr>
                                    <td>Location</td>                                    
                                    <td>{{$order->location ?? ''}}</td>
                            </tr>  
                            <tr>
                                    <td>Service</td>                                    
                                    <td>{{$order->service->name ?? ''}}</td>
                            </tr>
                            
                            {{-- <tr>
                                    <td>Rooms</td>                                    
                                    <td>{{$order->rooms ?? ''}}</td>
                            </tr>  
                            <tr>
                                    <td>Batteries</td>                                    
                                    <td>{{$order->batteries ?? ''}}</td>
                            </tr> 
                            <tr>
                                    <td>Number of AC's</td>                                    
                                    <td>{{$order->ac ?? ''}}</td>
                            </tr>

                            <tr>
                                    <td>Number of TV's</td>                                    
                                    <td>{{$order->tv ?? ''}}</td>
                            </tr> --}}


                            <tr>
                                    <td>Message</td>                                    
                                    <td>{{$order->message ?? ''}}</td>
                            </tr>
                            
                            
                          </tbody>
                        </table>

                        <div>
                                {{-- <a href="#" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Split Button Primary</span>
                                      </a>
                                      
                                      <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Split Button Success</span>
                                      </a> --}}
                                      
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
            <input type="email" name="email" placeholder="email" value="{{$order->email}}" class="form-control mb-3" required>

            <input type="text" name="name" value="{{$order->full_name}}" class="form-control mb-3" required hidden>
          
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
