

<?php $__env->startSection('content'); ?>

<!-- Main start -->
<main class="main--wrapper">
    <!-- Hero -->
    <section class="hero position-relative">
        <div class="hero--active">
            <div class="hero-single banner" data-background="/images/img/bat2.jpg" >
                
                <div class="hero__padding hero__padding--h3">
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="hero__caption hero__caption--h3">
                                <h1 class="hero--big-title white-color fw-400" data-animation="fadeInDown" data-delay=".4s" style="color: black !important; margin-top:-100px;">Batteries</h1>
                                <h3 class="hero--big-title white-color fw-500" data-animation="fadeInDown" data-delay=".4s" style="color:gray !important;">Sales/Installation</h3>


                                 <div class="button">
                                <a href="#learn-more" class="btn btn--blue  white-color" data-animation="fadeInLeft" data-delay=".6s">Learn More</a>
                                <a href="/get-quote" class="btn  btn--white theme-color" data-animation="fadeInRight" data-delay=".6s">Request a Quote</a>
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
                    src="/images/img/bat2.jpg" alt="Features Image">
              
                <div class="feature__img--caption text-center aos-init aos-animate " data-aos="fade-left">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-30">
            <div class="feature__content">
                <span class="fw-700 text-uppercase"><span></span>our batteries</span>
                <h2 class="theme-color fw-700 mb-30">Top Quality batteries.</h2>
                <p>Reohob Specialises in the series of batteries that are top quality: The Lead Acid batteries, The Lithium Ion Batteries and the Carbon-Lead Batteries.</p>
                <div class="feature__list d-flex">
                    <div class="feature__list--icon">
                        <i class="fal fa-check"></i>
                    </div>
                    <div class="feature__list--content">
                        <h5 class="fw-700 mb-10">Capacity</h5>
                        <p>They are in different capacities, ranging from 100aH - 150aH - 175aH - 200aH - 210aH and in different voltages mostly 12Volts for the Lead Acid and Carbon Lead.</p>
                    </div>
                </div>
                <div class="feature__list d-flex">
                    <div class="feature__list--icon">
                        <i class="fal fa-check"></i>
                    </div>
                    <div class="feature__list--content">
                        <h5 class="fw-700 mb-10">Storage application</h5>
                        <p>The batteries are used to store power from source, either from the grid or solar panels. This power stored is converted to electricity for use by the help of an Inverter System.</p>
                    </div>
                </div>
                <div class="feature__list d-flex">
                    <div class="feature__list--icon">
                        <i class="fal fa-check"></i>
                    </div>
                    <div class="feature__list--content">
                        <h5 class="fw-700 mb-10">Warranty</h5>
                        
                        <p>Our brand of Batteries have a warranty ranging from 12 months (1 year) to 60 months (5years) depending on specifications.</p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- <div class="row justify-content-between pt-100">
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
    </div> -->
</div>
</section>
<!-- Feature End -->

<!-- contact-form-area end -->
</main>
<!-- Main start end /-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

    $(document).ready(function(){

        $("#batteries-form").submit( function (e) {

                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                $(".loader").show();
                $(".batteries-div").hide();
                
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
                            document.getElementById("batteries-form").reset();
                            $(".batteries-div").show();
                        
                        }else {

                            swal("An error occured!", "An error has occured please try again later", "warning");
                            $(".loader").hide();
                            $(".batteries-div").show();

                        }
                        
                        
                    }
    
                    });
    
                
        });
        
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/temitope/Documents/GitHub/reohob/resources/views/web/batteries.blade.php ENDPATH**/ ?>