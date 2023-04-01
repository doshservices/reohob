@extends('layouts.web')

@section('content')


<!-- Main start -->
<main class="main--wrapper">
    <!-- Hero -->
    <section class="hero position-relative">
        <div class="hero--active">
            <div class="hero-single banner" data-background="/images/hero/inverter.jpg">
                {{-- <div class="hero__padding hero__padding--h3" style="background: rgba(0, 0, 0, .7);"> --}}
                <div class="hero__padding hero__padding--h3">
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="hero__caption hero__caption--h3">
                                <h1 class="hero--big-title white-color fw-400" data-animation="fadeInDown" data-delay=".4s" style="color: black !important; margin-top:-100px;">Inverters</h1>
                                <h3 class="hero--big-title white-color fw-500" data-animation="fadeInDown" data-delay=".4s" style="color: gray !important;">Sales/Installation</h3>
                                 <div class="button">

                                <a href="#learn-more" class="btn btn--blue  white-color" data-animation="fadeInLeft" data-delay=".6s">Learn More</a>
                                <a href="/get-quote" class="btn  btn--white theme-color" data-animation="fadeInRight" data-delay=".6s">Request a quote</a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero end /-->

<!-- About -->
<section class="feature feature-area pt-125 pb-100 fix" id="learn-more">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="about-ex theme">
                    <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>About Inverter</span>
                    <h2 class="theme-color fw-700 mb-30">Our Inverter systems are innovative and reengineered.
                    </h2>
                    <p class="mb-20">With the wide range of capacities we have from 1KVA to 100KVA, we are able to cater for every customer’s power need.

                        <br>
                        These systems effectively store power in storage facilities like the Deep Cycle and Lithium Ion Batteries and also convert the power store into electricity for use when needed.
                         <br>
                        <strong>Warranty of 1 year.</strong>
                        </p>
                </div>
            </div>
            <div class="col-lg-7 mb-30">
                <div class="about-img position-relative">
                    <img src="/images/img/mockup.png" alt="">
                    <!--<div class="about-img--2 d-none d-md-block">-->
                    <!--    <img src="/images/img/about-img-ex2.jpg" alt="">-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- Servcies -->
{{-- <section class="service position-relative fix pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30 text-center">
                <div class="about-service position-relative white-bg">
                    <img src="/images/img/about-service1.jpg" alt="">
                    <div class="about-service--content">
                        <h4 class="service__title fw-600">Comapny History</h4>
                        <p class="mb-20">On the other hand denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms pleasure</p>
                        <a href="#" class="service__link--h4 text-uppercase fw-700"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 text-center">
                <div class="about-service position-relative white-bg">
                    <img src="/images/img/about-service2.jpg" alt="">
                    <div class="about-service--content">
                        <h4 class="service__title fw-600">Mission & Vision</h4>
                        <p class="mb-20">On the other hand denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms pleasure</p>
                        <a href="#" class="service__link--h4 text-uppercase fw-700"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30 text-center">
                <div class="about-service position-relative white-bg">
                    <img src="/images/img/about-service3.jpg" alt="">
                    <div class="about-service--content">
                        <h4 class="service__title fw-600">Online Support</h4>
                        <p class="mb-20">On the other hand denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms pleasure</p>
                        <a href="#" class="service__link--h4 text-uppercase fw-700"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Servcies end -->

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
                                <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>get
                                    consultation</span>
                                <h2 class="theme__big--title fw-700 mb-35">Need consultation installing solar inverter system? </h2>
                                <div class="consult-button ">
                                    <a href="/contact-reohob"
                                        class="btn btn--blue  white-color aos-init aos-animate"
                                        >Get started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-5 d-none d-lg-block">
                            <div class="consult__thumb">
                                <img src="/images/img/ImgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Consultation End -->
<!-- Working Process -->

{{-- <section class="work pt-125 pb-85">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                <div class="theme text-center">
                    <span class="theme__small--title fw-700 text-uppercase"><span></span>working
                        process<span></span></span>
                    <h2 class="theme__big--title fw-700 mb-90">How dose we complate our project</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-3 col-md-6 text-center mb-30">
                <div class="work__block">
                    <i class="fal fa-mouse position-relative"><span>01</span></i>
                    <h4>Choose Services</h4>
                    <p>Avoids pleasure, because it is ple asure but because those who donot know how to pursue
                        pleasure rationally</p>
                    <a href="#"><i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-30">
                <div class="work__block">
                    <i class="fal fa-chart-line position-relative"><span>02</span></i>
                    <h4>Project Analysis</h4>
                    <p>But must explain to you how all this mistaken idea of denouncing pleasure and praising
                        pain was born</p>
                    <a href="#"><i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-30">
                <div class="work__block">
                    <i class="fal fa-trophy-alt position-relative"><span>03</span></i>
                    <h4>Got Final Result</h4>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihiles
                        molestiae consequatur vel</p>
                    <a href="#"><i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Working Process End -->



 <!-- contact-form-area start -->
 
{{-- <section class="contact-form-area"  id="request-quote">
    <div class="container">
        <div class="form-wrapper grey-bg">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center mb-40">
                    <div class="theme">
                        <h2 class="black-color mb-15">Send Us a Message</h2>
                        <h5 class="fw-500 primary-color">Request a Quote </h5>
                    </div>
                </div>
            </div>

            <form action="/inverter" method="POST" name="inverter-form" id="inverter-form">

                @csrf

                <div class="loader" style="display: none;">Loading...</div>

                
                <div class="inverter-div">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="c-form-name">
                                <span class="label-text">Full Name:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <input type="text" name="name" placeholder="Your name..." class="c-form-name form-control" id="c-form-name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="c-form-name">
                                <span class="label-text">Phone:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <input type="tel" name="phone" placeholder="Phone Number" class="c-form-name form-control" id="c-form-name" required>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-6">
                            <label for="c-form-email">
                                <span class="label-text">Email:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <input type="text" name="email" placeholder="Your email address..." class="c-form-email form-control" id="c-form-email" required>
                    </div>
                    <div class="form-group col-lg-6">
                            <label for="c-form-name">
                                <span class="label-text">Location:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <input type="text" name="location" placeholder="Location" class="c-form-name form-control" id="c-form-name" required>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="c-form-profession">
                                <span class="label-text">Service:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <select name="service" class="c-form-profession form-control" id="c-form-profession" required>

                                <option value="1" selected>Inverter System Package</option>
                                
                            </select>
                        </div>
                            
    
                        <div class="form-group mb-30">
                            <label for="c-form-message">
                                <span class="label-text">Additional Message:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <textarea name="message" placeholder="Message text..." class="c-form-message form-control" id="c-form-message"></textarea>
                        </div>
                        <button type="submit" class="btn">Send message</button>
                        
                </div>
                
            </form>
        </div>
    </div>
</section> --}}

<!-- contact-form-area end -->
</main>
<!-- Main start end /-->

@endsection


@section('script')
<script>

    $(document).ready(function(){

        $("#inverter-form").submit( function (e) {

                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                $(".loader").show();
                $(".inverter-div").hide();
                
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
    
    
                $.ajax({
                    type: 'POST',
                    url: url,
                    // dataType: "json",
                    async:true,
                    data: form.serialize(),
    
                    success: function(data) {
                            
                        if (data.message == "success") {

                            $(".loader").hide();
                            swal("Your Order has been sent!", "You will be contacted by a member of our support team soon", "success");
                            document.getElementById("inverter-form").reset();
                            $(".inverter-div").show();



                        
                        }else {

                            swal("An error occured!", "An error has occured please try again later", "warning");
                            $(".loader").hide();
                            $(".inverter-div").show();

                        }
                        
                        
                    }
    
                    });
    
                
        });
        
    });

</script>
@endsection
            