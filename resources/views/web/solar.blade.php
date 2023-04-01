@extends('layouts.web')

@section('content')

<!-- Main start -->
<main class="main--wrapper">
    <!-- Hero -->
    <section class="hero position-relative">
        <div class="hero--active">
            <div class="hero-single banner" data-background="/images/hero/solar-image.jpg" >
                <div class=" hero__padding hero__padding--h3">
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="hero__caption hero__caption--h3">
                                <h1 class="hero--big-title white-color fw-500" data-animation="fadeInDown" data-delay=".4s" style="color: black !important; margin-top:-100px;">Solar Panels</h1>
                                <h3 class="hero--big-title white-color fw-500" data-animatiorign="fadeInDown" data-delay=".4s" style="color: gray !important;">Sales/Installation</h3>
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
    <!-- Feature -->
    <section class="feature feature-area pt-130 pb-100 fix" id="learn-more">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 position-relative mb-30">
                    <div class="feature__img position-relative">
                        <div class="feature__img--dot-shape">
                            <img class="aos-init aos-animate " data-aos="fade-down"
                                src="/images/shape/feature-dot-shape.png" alt="">
                        </div>
                        <img class="feature-img js-tilt aos-init aos-animate " data-aos="fade-right"
                            src="/images/img/solar_panel.jpg" alt="Features Image">
                        <div class="feature__img--caption text-center aos-init aos-animate " data-aos="fade-left">
                            {{-- <div class="feature__img--caption--shadow js-tilt">
                                <span class="fw-700 theme-color">35<sup>+</sup></span>
                                <p class="fw-700 theme-color">Years</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="feature__content">
                        <span class="fw-700 text-uppercase"><span></span>Our Solar Panel</span>
                        <h3 class="theme-color fw-400 mb-30">Our highly efficient solar panels are used to convert the energy from sunlight directly into electricity. </h3>
                        <p>These Solar panels are high energy generation panels with very high tolerance for harsh environments and extreme weather conditions.

                            <br>
                            The Solar Panels are connected to the Batteries and Inverter system to ensure constant and uninterrupted power supply during the day and night.
                        </p>
                        <div class="feature__list d-flex">
                            <div class="feature__list--icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="feature__list--content">
                                <h5 class="fw-700 mb-10">Available options </h5>
                                <p>available from 250watts to 445watts.</p>
                            </div>

                        </div>

                        <div class="feature__list d-flex">

                            <div class="feature__list--icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="feature__list--content">
                                <h5 class="fw-700 mb-10">Ranging from </h5>
                                <p>60 -Cell Bifacial Mono PERC Double Glass Module(30mm)
                                    To 72 -Cell Bifacial Mono PERC Double Glass Module(30mm)
                                   </p>
                            </div>

                        </div>

                        <div class="feature__list d-flex">
                            <div class="feature__list--icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="feature__list--content">
                                <h5 class="fw-700 mb-10">Guaranty</h5>
                                <p>Guaranty of 25 years.</p>
                            </div>
                        </div>
                        {{-- <div class="feature__list--button">
                            <a href="#" class="btn btn--blue  white-color aos-init aos-animate "
                                data-aos="fade-up">Get started</a>
                        </div> --}}
                    </div>
                </div>
            </div>


            {{-- <div class="row justify-content-between pt-100">
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-dharmachakra theme-color d-block"></i>
                        </span>
                        <p><span class="counter">7895</span> <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Project Complate</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-crown theme-color d-block"></i>
                        </span>
                        <p><span class="counter">895</span> <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Winning Awards</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-heart theme-color d-block"></i>
                        </span>
                        <p><span class="counter">9862</span> <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Satisfied Clients</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="statistics__block statistics__block--h2">
                        <span class="fw-600 theme-color">
                            <i class="fal fa-head-side-headphones theme-color d-block"></i>
                        </span>
                        <p><span class="counter">523</span> <sup><i class="fal fa-plus"></i></sup></p>
                        <h5 class="mb-10 primary-color">Expert Consulatant</h5>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Feature End -->

    <!-- Company History -->
    <section class="history-area grey-bg position-relative fix" style="padding-top: 10px">
        <div class="history__left--thumb history__right--thumb d-none d-xl-block" data-background="/images/img/solar_roof1.jpg" style="height: 100vh; background-size: contain;
    background-position: top center; max-width: 100%;">
    
            {{-- <a class="popup-video" href="#"><i class="fas fa-play"></i></a> --}}
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 offset-xl-1 col-lg-12 mb-30">
                    <div class="feature__content--ex feature__content--ex-2 theme">
                        <span
                            class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>Our Highlights</span>
                        <h2 class="theme-color fw-700 mb-30">Highlights</h2>
                        <div class="row">
                            <div class="feature__list d-flex col-xl-12 col-lg-4 col-md-6" style="margin-bottom: 20px;">
                                <div class="feature__list--icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <div class="feature__list--content">
                                    <h5 class="fw-700 mb-10">High energy generation</h5>
                                </div>
                            </div>
                            <div class="feature__list d-flex col-xl-12 col-lg-4 col-md-6" style="margin-bottom: 20px;">
                                <div class="feature__list--icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <div class="feature__list--content">
                                    <h5 class="fw-700 mb-10">High tolerance.</h5>
                                </div>
                            </div>
                            <div class="feature__list d-flex col-xl-12 col-lg-4 col-md-6" style="margin-bottom: 20px;">
                                <div class="feature__list--icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <div class="feature__list--content">
                                    <h5 class="fw-700 mb-10">Reliable superior low irradiance performance</h5>
                                </div>
                            </div>

                            <div class="feature__list d-flex col-xl-12 col-lg-4 col-md-6" style="margin-bottom: 20px;">
                                <div class="feature__list--icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <div class="feature__list--content">
                                    <h5 class="fw-700 mb-10">Easy Maintenance.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company History End -->

   

    <section class="history-area  position-relative pt-125 pb-100 fix">
        <img src="/images/img/solar.jpg" alt="" style="background-repeat: no-repeat;background-size:cover; background-position: middle;">

        {{-- <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    

                    
                </div>
            </div>
        </div> --}}
    </section>

    
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
                <form action="/solar" method="POST" name="solar-form" id="solar-form">

                    @csrf
        
                <div class="loader" style="display: none;">Loading...</div>

                
                    <div class="solar-div">
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
                                    <option value="2">Solar Inverter System Package</option>
        
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

        $("#solar-form").submit( function (e) {

                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                $(".loader").show();
                $(".solar-div").hide();
                
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
                            document.getElementById("solar-form").reset();
                            $(".solar-div").show();

                        
                        }else {

                            swal("An error occured!", "An error has occured please try again later", "warning");
                            $(".loader").hide();
                            $(".solar-div").show();

                        }
                        
                        
                    }
    
                    });
    
                
        });
        
    });

</script>
@endsection
            