@extends('layouts.web')

@section('content')

<!-- Main start -->
<main class="main--wrapper">
    <!-- Hero -->
    <section class="hero position-relative">
        <div class="hero--active">
            <div class="hero-single banner" data-background="/images/hero/ev_charger.jpg" >
                <div class="hero__padding hero__padding--h3 background-image" style= "height: 100vh;" >
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="hero__caption hero__caption--h3">
                                <h1 class="hero--big-title white-color fw-400" data-animation="fadeInDown" data-delay=".4s" style="color: white !important; margin-top:-100px;">EV Charging Station</h1>
                                <h3 class="hero--big-title white-color fw-500" data-animation="fadeInDown" data-delay=".4s" style="color: white !important;">Sales/Installation</h3>
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
                    src="/images/img/ev_.jpg" alt="Features Image">
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
                <span class="fw-700 text-uppercase"><span></span>Charging Station</span>
                <h2 class="theme-color fw-700 mb-30">We believe the future is green and for automobiles the future is fully electric.</h2>
                <p>Modern New Technology Electrical vehicles are the fastest growing sector in the automotive industry. And our Electric charging installations are designed for the sole purpose of delivering highest quality and value for products, installations, servicing, maintenance and every other after sales services.

                    <br>
                    We believe the future is green and for automobiles the future is fully electric.
                    <br>
                    International standards of installation, and maintenance.
                    </p>
                    
                {{-- <div class="feature__list d-flex">
                    <div class="feature__list--icon">
                        <i class="fal fa-check"></i>
                    </div>
                    <div class="feature__list--content">
                        <h5 class="fw-700 mb-10">Best For IT Consulting</h5>
                        <p>Sedut perspiciatis unde omnis iste natus error sitlupt tem accusantium doloremque
                            laudantium totam remap eriaeaque ipsa quae ab illo inventore veritatis </p>
                    </div>
                </div>
                <div class="feature__list--button">
                    <a href="#" class="btn btn--blue  white-color aos-init aos-animate "
                        data-aos="fade-up">Get started</a>
                </div> --}}

            </div>
        </div>
    </div>

    
</div>
</section>
<!-- Feature End -->

<!-- Company History -->
<!-- <section class="history-area grey-bg position-relative pt-125 pb-100 fix">
<div class="history__left--thumb history__right--thumb d-none d-xl-block" data-background="/images/img/ev1.jpg">
    {{-- <a class="popup-video" href="#"><i class="fas fa-play"></i></a> --}}
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-1 col-lg-12 mb-30">
            <div class="feature__content--ex feature__content--ex-2 theme">
                <span
                    class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>what
                    we do</span>
                <h2 class="theme-color fw-700 mb-30">Powerful solutions for every IT systems</h2>
                <div class="row">
                    <div class="feature__list d-flex col-xl-12 col-lg-4 col-md-6">
                        <div class="feature__list--icon">
                            <i class="fal fa-check"></i>
                        </div>
                        <div class="feature__list--content">
                            <h5 class="fw-700 mb-10">Best For IT Consulting</h5>
                            <p>Sedut perspiciatis unde omnis iste natus error sitlup accusant doloremque
                                laudantium totam remap eriaeaque ipsa</p>
                        </div>
                    </div>
                    <div class="feature__list d-flex col-xl-12 col-lg-4 col-md-6">
                        <div class="feature__list--icon">
                            <i class="fal fa-check"></i>
                        </div>
                        <div class="feature__list--content">
                            <h5 class="fw-700 mb-10">Cyber Security Systems</h5>
                            <p>Sedut perspiciatis unde omnis iste natus error sitlup accusant doloremque
                                laudantium totam remap eriaeaque ipsa</p>
                        </div>
                    </div>
                    <div class="feature__list d-flex col-xl-12 col-lg-4 col-md-6">
                        <div class="feature__list--icon">
                            <i class="fal fa-check"></i>
                        </div>
                        <div class="feature__list--content">
                            <h5 class="fw-700 mb-10">Digital Solutions Agency</h5>
                            <p>Sedut perspiciatis unde omnis iste natus error sitlup accusant doloremque
                                laudantium totam remap eriaeaque ipsa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
 -->
<section class="history-area  position-relative pt-125 pb-100 fix" data-background="/images/img/three.jpg" style ="stybackground-repeat: no-repeat;background-size:cover;height: 100vh ">
    <div class="hero-region--center-bottom" style="z-index: 1">
    <div class="hero-callouts hero-callouts--narrow hero-callouts--white hero-callouts--with-button">
        <div class="callout callout--center cmp-animate--to_reveal callout--divider" data-should-open="" style="--cmp-callout-item: 0; --callout-width: 25%;">
            <div class="callout-container">
                <div class="callout-title">
                    <div class="callout-rich-ui--star">
                        ★★★★★
                    </div>
                </div>
                <p class="callout-description callout-description--desktop tds-text--normal tds-text--caption tds-text--black fineprint">5-Star Safety</p>
                <p class="callout-description callout-description--mobile tds-text--normal tds-text--caption tds-text--black fineprint">5-Star Safety</p>
            </div>
        </div>
        <div class="callout--divider-line cmp-animate--to_reveal"></div>
        <div class="callout callout--center cmp-animate--to_reveal callout--divider" data-should-open="" style="--cmp-callout-item: 1; --callout-width: 25%;">
            <div class="callout-container">
                <div class="callout-title">
                    <div class="callout-title--text">
                        <span class="tds-text--h2 s2-head">7</span>
                    </div>
                    <div class="callout-title--asset callout-title--asset-desktop" style="--asset-order: -1;">
                        <img
                            data-src="/images/images/shape/services-ball-shape.png"
                            class="callout-title--asset-image lozad"
                            alt=""
                        />
                    </div>
                    <div class="callout-title--asset callout-title--asset-mobile" style="--asset-order: -1;">
                        <img
                            data-src=""
                            class="callout-title--asset-image lozad"
                            alt=""
                        />
                    </div>
                </div>
                <p class="callout-description callout-description--desktop tds-text--normal tds-text--caption tds-text--white fineprint">Room for Seven</p>
                <p class="callout-description callout-description--mobile tds-text--normal tds-text--caption tds-text--white fineprint">Room for Seven</p>
            </div>
        </div>
        <div class="callout--divider-line cmp-animate--to_reveal"></div>
        <div class="callout callout--center cmp-animate--to_reveal" data-should-open="" style="--cmp-callout-item: 2; --callout-width: 25%;">
            <div class="callout-container">
                <div class="callout-title">
                    <div class="callout-title--text">
                        <span class="tds-text--h2 s2-head">371</span>
                        <span class="tds-text--h3 callout-title--micro callout-title--micro-with-space">mi</span>
                    </div>
                </div>
                <p class="callout-description callout-description--desktop tds-text--normal tds-text--caption tds-text--white fineprint">
                    Range<br />
                    (EPA est.)
                </p>
                <p class="callout-description callout-description--mobile tds-text--normal tds-text--caption tds-text--white fineprint">
                    Range<br />
                    (EPA est.)
                </p>
            </div>
        </div>
        <div class="hero-callouts--button cmp-animate--to_reveal" style="--cmp-callout-item: 3; --callout-width: 25%;">
            <a
                data-gtm-event="drawer-interaction"
                data-gtm-drawer="hero"
                data-gtm-interaction="order now"
                class="tds-btn tds-o-btn tds-btn--outline tds-btn--white tcl-button"
                href="/modelx/design"
                title=""
                data-button-text-desktop="Order Now"
                data-button-text-mobile="Order Now"
            >
                Order Now
            </a>
        </div>
    </div>
</div>

    
</section>
<!-- Servcies end -->

<!-- Best Feature -->

{{-- <section class="feature pb-100 pt-130 position-relative">
<div class="history__left--thumb history__left--thumb-3 d-none d-xl-block"
    data-background="/images/img/Histroy-left-thumb-3.jpg">
    <a class="popup-video" href="https://www.youtube.com/watch?v=gOqlwlQjVis"><i class="fas fa-play"></i></a>
</div>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-xl-4 offset-xl-8 col-lg-8 offset-lg-2 mb-30">
            <div class="best-feature--right">
                <div class="theme">
                    <span
                        class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>best
                        features</span>
                    <h2 class="theme__big--title fw-700 mb-25">Security is the main goals to our missions
                    </h2>
                    <p class="mb-40 pr-15">But I must explain to you how all this mistaken idea of denounc ing
                        pleasure and praising pain was born and I will give yomplete acount of the system,
                        and
                        expound the actua</p>
                </div>
                <div class="skill-wrapper mb-40 d-flex align-items-center">
                    <div class="skill-circle">
                        <div class="progress-circular">
                            <input type="text" class="knob" value="0" data-rel="75" data-linecap="round"
                                data-width="109" data-bgcolor="#e8e8eb" data-fgcolor="#221f3c"
                                data-thickness=".15" data-readonly="true" disabled>
                        </div>
                    </div>
                    <div class="skill-circle-text">
                        <h3>Satisfaction Clients</h3>
                        <p>Pleasure and praising pain was born and will give yomplete acount of the system
                        </p>
                    </div>
                </div>
                <div class="skill-wrapper mb-40 d-flex align-items-center">
                    <div class="skill-circle">
                        <div class="progress-circular">
                            <input type="text" class="knob" value="0" data-rel="85" data-linecap="round"
                                data-width="109" data-bgcolor="#e8e8eb" data-fgcolor="#221f3c"
                                data-thickness=".15" data-readonly="true" disabled>
                        </div>
                    </div>
                    <div class="skill-circle-text">
                        <h3>Professional Expert</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                            molestiae
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}

<!-- Best Feature End -->
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
        <form action="/charging" method="POST" name="charging-form" id="charging-form">

            @csrf

            <div class="loader" style="display: none;">Loading...</div>
            


            <div class="charging-div">
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

                            <option value="5" selected>EV Charging Stations</option>
                            
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

        $("#charging-form").submit( function (e) {

                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                $(".loader").show();
                $(".charging-div").hide();
                
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
                            document.getElementById("charging-form").reset();
                            $(".charging-div").show();



                        
                        }else {

                            swal("An error occured!", "An error has occured please try again later", "warning");
                            $(".loader").hide();
                            $(".charging-div").show();

                        }
                        
                        
                    }
    
                    });
    
                
        });
        
    });

</script>
@endsection
            