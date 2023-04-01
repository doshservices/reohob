@extends('layouts.web')

@section('content')


<!-- Main start -->
<main class="main--wrapper">

    <!-- Page Title -->
    {{-- <div class="page-title-area page-title-padding pos-relative gray-bg fix"
        data-background="/images/img/page-title-bg.jpg" data-overlay="theme" data-opacity="7"> --}}
        <div class="page-title-area page-title-padding pos-relative gray-bg fix" style="background-color: black !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 text-center">
                    <div class="page-title">
                        <h3 class="white-color" style="color: white !important;">Payment Plan</h3>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Payment Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title End -->


    <!-- Consultation -->
    <section class="consult consult__bg consult__bg--h5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="position-relative consult-box--ex">
                        <img src="/images/shape/consult-shape1.png" alt=""
                            class="consult__shape consult__shape1">
                        <img src="/images/shape/consult-shape2.png" alt=""
                            class="consult__shape consult__shape2">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7">
                                <div class="theme">
                                    <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>Payment Plan</span>
                                    <h2 class="theme__big--title fw-700 mb-35">A process of verification and eligibility is required for a payment spread option.

                                        Available for only 1 month to 12 months. 
                                       </h2>
                                    <div class="consult-button ">
                                        <a href="/get-quote"
                                            class="btn btn--blue btn--icon white-color "
                                            data-aos="fade-up">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 offset-xl-1 col-lg-5 d-none d-lg-block">
                                <div class="consult__thumb">
                                    <img src="/images/img/consult-right-thumkb-ex.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation End -->


</main>
<!-- Main start end /-->


@endsection

@section('script')
<script>

</script>
@endsection            