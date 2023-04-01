

<?php $__env->startSection('content'); ?>


<!-- Main start -->
<main class="main--wrapper">
    <!-- Hero -->
    <section class="hero position-relative">
        <div class="hero--active">
            <div class="hero-single banner" data-background="/images/hero/inverter.jpg">
                
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
                                    <a href="/contact"
                                        class="btn btn--blue  white-color aos-init aos-animate"
                                        data-aos="fade-up">Get started</a>
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



<!-- Working Process End -->



 <!-- contact-form-area start -->
 


<!-- contact-form-area end -->
</main>
<!-- Main start end /-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/temitope/Documents/GitHub/reohob/resources/views/web/inverters.blade.php ENDPATH**/ ?>