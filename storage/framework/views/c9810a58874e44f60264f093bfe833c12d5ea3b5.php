

<?php $__env->startSection('content'); ?>

<!-- Main start -->
<main class="main--wrapper">

    <!-- Page Title -->
    
    <div class="page-title-area page-title-padding pos-relative gray-bg fix"
        style="background-color: black !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h3 class="white-color">Contact Us</h3>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title End -->

    <!-- Contacts -->
    <section class="contacts pt-125 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-30">
                    <div class="theme">
                        <span class="theme__small--title theme__small--title-left fw-700 text-uppercase"><span></span>contact us</span>
                        <h2 class="theme__big--title fw-700 mb-25">To Contact us, <br>Kindly send us an email</h2>
                    </div>
                    <div class="contacts__social">
                        <ul>
                            <li><a href="https://www.facebook.com/Reohob.Ltd/"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="https://twitter.com/reohob"><i class="fab fa-twitter"></i></a></li> 
                            <li><a href="https://instagram.com/reohob"><i class="fab fa-instagram"></i></a></li>
                             <li><a href="https://www.linkedin.com/company/reohob-nigeria-limited/"><i class="fab fa-linkedin"></i></a></li> 
                        </ul>
                    </div>
                    </br>
                    </br>
                    <div class="consult-button">
                        <a href="/terms"
                            class="btn btn--blue btn--icon white-color aos-init aos-animate">Terms and Condition</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 mb-30">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="contacts__address">
                                <i class="fal fa-envelope-open"></i>
                                <h5 class="primary-color">Email Address</h5>
                                <h4>info@reohob.com</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="contacts__address">
                                <i class="fal fa-phone"></i>
                                <h5 class="primary-color">Phone Number</h5>
                                <h4>(+234) 08038079483</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="contacts__address">
                                <i class="fal fa-map-marked-alt"></i>
                                <h5 class="primary-color">Head Office</h5>
                                <h4>Block 113, Plot 14 Lekki Epe Expressway, Lagos, Nigeria.</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="contacts__address">
                                <i class="fal fa-phone"></i>
                                <h5 class="primary-color">Shop Number</h5>
                                <h4>(+234) 0818 598 2675</h4>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 mb-40">
                            <div class="contacts__address">
                                <i class="fal fa-home"></i>
                                <h5 class="primary-color">Office Location</h5>
                                <h4>Block 113, Plot 14 Lekki Epe Expressway, Lagos, Nigeria.</h4>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacts End -->

    <!-- contact-form-area start -->
    <section class="contact-form-area">
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
                <form role="form" action="/contact" method="post" id="contact">
                    <?php echo csrf_field(); ?>
                    <div class="form-group" style="display: none;">
                         <label for="faxonly">Fax Only
                          <input type="checkbox" name="faxonly" id="faxonly" />
                         </label>
                        </div>
                        
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
                            <input type="text" name="phone" placeholder="Phone Number" class="c-form-name form-control" id="c-form-name" required>
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
                                <span class="label-text">Address:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <input type="text" name="location" placeholder="Address" class="c-form-name form-control" id="c-form-name" required>
                        </div>
                    </div>                           

                        <div class="form-group mb-30">
                            <label for="c-form-message">
                                <span class="label-text">Additional Message:</span> 
                                <span class="contact-error"></span>
                            </label>
                            <textarea name="message" placeholder="Message text..." class="c-form-message form-control" id="c-form-message" required></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfhiP8ZAAAAADMfSJbko9zVTTziuA5T9bQpiFks"></div>
                        <br/>
                        <button type="submit" class="btn btn-primary">Send message</button>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-form-area end -->

    <!-- Contact Map Start -->
    <div class="map">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-map">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.665506602428!2d3.5073706147702413!3d6.436989195342937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf67d49d2a067%3A0xa8f0b414358b3b9c!2sBlock%20113%2C%20Plot!5e0!3m2!1sen!2sng!4v1607425221649!5m2!1sen!2sng" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Map End -->

</main>
<!-- Main start end /-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

    var form = document.getElementById('contact');
    form.addEventListener("submit", function(event){
        if (grecaptcha.getResponse() === '') {                            
          event.preventDefault();
          alert('Please check the recaptcha');
        }
      }
    , false);

</script>
<?php $__env->stopSection(); ?>            
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/h9t9pt86bnje/Reohob/resources/views/web/contact.blade.php ENDPATH**/ ?>