@extends('layouts.web')

@section('content')

        {{-- <div class="back-to-home rounded d-none d-sm-block">
            <a href="/" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
        </div> --}}

        <!-- ERROR PAGE -->
        <section class="bg-home d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 text-center">
                        <img src="/images/404.png" class="img-fluid" alt="">
                        <div class="text-uppercase mt-4 display-3">Oh ! no</div>
                        <div class="text-capitalize text-dark mb-4 error-page">Page Not Found</div>
                        <p class="text-muted para-desc mx-auto">Sorry, we can’t find the page you were looking for.</p>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-12 text-center">  
                        {{-- <a href="index.html" class="btn btn-outline-primary mt-4">Go Back</a> --}}
                        <a href="/" class="btn btn-primary mt-4 ml-2">Back Home</a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- ERROR PAGE -->

@endsection

@section('script')
<script>

    $(document).ready(function(){

    });
</script>
@endsection
            