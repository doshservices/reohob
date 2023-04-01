{{-- if validation error exists show this tag --}}
{{-- @if (count($errors) > 0)
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
@endforeach
@endif 

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
    
@endif --}}

@if ($message = session('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        {{ $message }}
</div>
@endif


@if ($message = session('error'))
<div class="alert alert-danger fade show">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        {{ $message }}
</div>

@endif


@if ($message = session('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	{{ $message }}
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	{{ $message }}
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif