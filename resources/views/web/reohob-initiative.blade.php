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
                        <h3 class="white-color">The Reohob Initiative</h3>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>The Reohob Initiative</li>
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
                                    <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>REOHOB INITIATIVE</span>
                                    <h2 class="theme__big--title fw-700 mb-35">Clean Affordable Energy for Africa </h2>

                                    <p>The Initiative is focused on providing alternative power supply using renewable energy for Rural areas in the Nigerian and African communities.

                                        <br>

                                        Affordability is key for us at Reohob and our Motto: Clean Affordable Energy for Africa #CAEFA and we believe this vision is possible.
                                        <br>
                                        
                                        For partnerships and funding Contact
                                        
                                    </p>
                                    <div class="consult-button ">
                                        <a href="/contact"
                                            class="btn btn--blue btn--icon white-color aos-init aos-animate">Contact Us</a>
                                    </div>
                                    <div class="contacts__social" style="margin: 20px;">
                                        <ul>
                                            <li><a href="https://www.facebook.com/the.reohob.initaitive/"><i class="fab fa-facebook-f"></i></a></li>
                                            
                                            {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                                            
                                            <li><a href="https://instagram.com/the.reohob.initiative?igshid=1jp22ibpz4b"><i class="fab fa-instagram"></i></a></li>
                                            
                                            {{-- <li><a href="#"><i class="fab fa-google"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 offset-xl-1 col-lg-5 d-none d-lg-block">
                                <div class="consult__thumb">
                                     <img src="/images/img/solar-house.jpg" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation End -->

    <!-- Company statistics -->

    {{-- <section class="statistics--area pb-90 pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="theme text-center">
                        <span class="theme__small--title fw-700 text-uppercase"><span></span>company
                            statistics<span></span></span>
                        <h2 class="theme__big--title fw-700 mb-80">We are establish it consulting & digital
                            solutions company</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-dharmachakra theme-color d-block"></i>
                        </span>
                        <p class="counter">35 <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Project Complate</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-crown theme-color d-block"></i>
                        </span>
                        <p class="counter">9 <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Winning Awards</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-heart theme-color d-block"></i>
                        </span>
                        <p class="counter">34 <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Satisfied Clients</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-head-side-headphones theme-color d-block"></i>
                        </span>
                        <p class="counter">15 <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Expert Consulatant</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Company statistics End -->

</main>
<!-- Main start end /-->


@endsection

@section('script')
<script>

</script>
@endsection            