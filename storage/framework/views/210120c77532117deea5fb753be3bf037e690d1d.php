

<?php $__env->startSection('content'); ?>

<!-- Hero -->
<main class="main--wrapper">

    

    <div class="page-title-area page-title-padding pos-relative gray-bg fix"  style="background-color: black !important;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 text-center">
                    <div class="page-title">
                        <h3 class="white-color">Get a Quote </h3>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Get a Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title End -->

    

    <!-- Servcies -->
    <section class="service grey-bg position-relative fix pt-125 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="theme text-center">
                    <span class="theme__small--title fw-700 text-uppercase"><span></span>what we
                        do<span></span></span>
                    <h2 class="theme__big--title fw-700 mb-80">We provide the following exclusive services and after sale services <br></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col mb-30">
                <div class="securiy-services white-bg position-relative">
                    <div class="service__content--h5 service__content--h6">
                        <div class="service__icon--h5 ">
                            <span class="flaticon-monitor"></span>
                        </div>
                        <div class="service__text--h5 service__text--h6">
                            <h4 class="fw-600 ">Solar system installation</h4>
                           
                            <a href="#"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col mb-30">
                <div class="securiy-services white-bg position-relative">
                    <div class="service__content--h5 service__content--h6">
                        <div class="service__icon--h5 ">
                            <span class="flaticon-server-1"></span>
                        </div>
                        <div class="service__text--h5 service__text--h6">
                            <h4 class="fw-600">Inverter systems installation</h4>
                            
                            <a href="#"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col mb-30">
                <div class="securiy-services white-bg position-relative">
                    <div class="service__content--h5 service__content--h6">
                        <div class="service__icon--h5 ">
                            <span class="flaticon-safe-1"></span>
                        </div>
                        <div class="service__text--h5 service__text--h6">
                            <h4 class="fw-600">Global Support</h4>
                           
                            <a href="#"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col mb-30">
                <div class="securiy-services white-bg position-relative">
                    <div class="service__content--h5 service__content--h6">
                        <div class="service__icon--h5 ">
                            <span class="flaticon-financial"></span>
                        </div>
                        <div class="service__text--h5 service__text--h6">
                            <h4 class="fw-600">Security Systems installation</h4>
                           
                            <a href="#"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col mb-30">
                <div class="securiy-services white-bg position-relative">
                    <div class="service__content--h5 service__content--h6">
                        <div class="service__icon--h5 ">
                            <span class="flaticon-presentation"></span>
                        </div>
                        <div class="service__text--h5 service__text--h6">
                            <h4 class="fw-600">Electric vehicle Charging Stations installation</h4>
                            
                            <a href="#"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col mb-30">
                <div class="securiy-services white-bg position-relative">
                    <div class="service__content--h5 service__content--h6">
                        <div class="service__icon--h5 ">
                            <span class="flaticon-safe-1"></span>
                        </div>
                        <div class="service__text--h5 service__text--h6">
                            <h4 class="fw-600">Servicing and maintenance</h4>
                            
                            <a href="#"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Servcies end -->
 
        <!-- contact-form-area start -->
        <section class="contact-form-area"  id="request-quote">
        <div class="container">
            <div class="form-wrapper grey-bg">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center mb-40">
                        <div class="theme">
                            
                            <h5 class="fw-500 primary-color">Request a Quote </h5>
                        </div>
                    </div>
                </div>
                <form action="/quote" method="POST" name="quote-form" id="quote-form">

                        
                    <?php echo csrf_field(); ?>
        
                        <div class="form-group" style="display: none;">
                         <label for="faxonly">Fax Only
                          <input type="checkbox" name="faxonly" id="faxonly" />
                         </label>
                        </div>
                        
                    <div class="loader" style="display: none;">Loading...</div>

                    <div class="quote-div">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="c-form-name">
                                    <span class="label-text">Full Name:</span> 
                                    <span class="contact-error"></span>
                                </label>
                                <input type="text" name="name" placeholder="Your name..." class="c-form-name form-control" id="form-name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="c-form-name">
                                    <span class="label-text">Phone:</span> 
                                    <span class="contact-error"></span>
                                </label>
                                <input type="tel" name="phone" placeholder="Phone Number" class="c-form-name form-control" id="form-phone" required>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-lg-6">
                                <label for="c-form-email">
                                    <span class="label-text">Email:</span> 
                                    <span class="contact-error"></span>
                                </label>
                                <input type="text" name="email" placeholder="Your email address..." class="c-form-email form-control" id="form-email" required>
                        </div>
                        <div class="form-group col-lg-6">
                                <label for="c-form-name">
                                    <span class="label-text">Address:</span> 
                                    <span class="contact-error"></span>
                                </label>
                                <input type="text" name="location" placeholder="Enter Address" class="c-form-name form-control" id="form-location" required>
                        </div>
                        </div>
                            <div class="form-group">
                                <label for="c-form-profession">
                                    <span class="label-text">Service:</span> 
                                    <span class="contact-error"></span>
                                </label>
                                <select name="service" class="c-form-profession form-control" id="form-service" required>
                                    <option>Select a Service</option>
                                    <option value="1">Inverter System Package</option>
                                    <option value="2">Solar Inverter System Package</option>
                                    
        
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="c-form-profession">
                                    <span class="label-text">Property Type:</span> 
                                    <span class="contact-error"></span>
                                </label>
                                <select name="property" class="c-form-profession form-control" id="form-property" required>
                                    <option>Select a Property</option>
                                    <option value="duplex">Duplex</option>
                                    <option value="bungalow">Bungalow</option>        
                                </select>
                            </div>
        
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="c-form-name">
                                        <span class="label-text">Number of Rooms:</span> 
                                        <span class="contact-error"></span>
                                    </label>
                                    
                                    <select name="rooms" class="c-form-profession form-control" id="form-room" required>
                                        <option>Select No of room</option>
                                        <option value="1">1 Room</option>
                                        <option value="2">2 Rooms</option>        
                                        <option value="3">3 Rooms</option>        
                                        <option value="4">4 Rooms</option>        
                                        <option value="5">5 Rooms</option>     
                                    </select>
                                </div>
                                <div class="form-group col-lg-4 ">
                                    <label for="c-form-name">
                                        <span class="label-text">Number of Fans:</span> 
                                        <span class="contact-error"></span>
                                    </label>
                                    <input type="number" name="fan" placeholder="Number of fans" class="c-form-email form-control" id="form-batteries" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="c-form-name">
                                        <span class="label-text">Number of TVs:</span> 
                                        <span class="contact-error"></span>
                                    </label>
                                    <input type="number" name="tvs" placeholder="Number of TVs" class="c-form-email form-control" id="form-tv" required>
                                </div>
                                
                            </div>
                                
                            <div class="row">
                                <div class="form-group col-lg-6 ">
                                    <label for="c-form-name">
                                        <span class="label-text">Number of AC:</span> 
                                        <span class="contact-error"></span>
                                    </label>
                                    <input type="number" name="acs" placeholder="Number of AC" class="c-form-email form-control" id="form-ac" required>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="c-form-name">
                                        <span class="label-text">Number of Freezers:</span> 
                                        <span class="contact-error"></span>
                                    </label>
                                    <input type="number" name="freezer" placeholder="Number of Freezers" class="c-form-email form-control" id="form-freezer" required>
                                </div>
                                
                                <div class="g-recaptcha" data-sitekey="6LfhiP8ZAAAAADMfSJbko9zVTTziuA5T9bQpiFks"></div>
                                <br/>
                            </div>
        
                            <button type="submit" class="btn">Submit</button>
                            
                    </div>

                    <div class="response-div" id="response-div" style="display: none;">


                        <h3>The recommendation for the details you submitted is bellow</h3>
                        <p style="color: red">Please note that this is not the final recommendation, it is subject to change after on site evaluation.</p>
                        <table class="table table-hover">
                            <tbody>
        
                            <tr>
                                <td>Inverter</td>
                                <td class="p_capacity"></td>
                            </tr> 
                            
                            <tr>
                                <td>Property</td>
                                <td class="p_property"></td>
                            </tr>  
                            <tr>
                                <td>Rooms</td>
                                <td class="p_room"></td>
                            </tr> 
                            <tr>
                                <td>Tv</td>
                                <td class="p_tv"></td>
                            </tr> 
                            <tr>
                                <td>AC</td>
                                <td class="p_ac"></td>
                            </tr>   
                            <tr>
                                <td>Freezer</td>
                                <td class="p_freezer"></td>
                            </tr> 
        
                            
                          </tbody>
                          
                        </table>
                        
                        <table id="product_table" class="table table-hover mb-3">
                            <thead>
                                <tr>
                                    
                                  <th>Product</th>
                                  <th>Price</th>
                                  <th>View</th>
                                </tr>
                              </thead>
                              <tbody>
    
                              </tbody>
                        </table>
        
                        <div class="row">
                            <div class="form-group col-lg-4">
        
                                
                                
                                

                                <a href="tel:+2348038079483"  class="btn btn-primary">Contact Sales Person</a>

                                    
                                </div>
                
                                

                                <div class="form-group col-lg-4">
                                    
                                <a href="http://shop.reohob.com/" target="_blank" class="btn btn-warning" id="">Go to Shop</a>
                                    
                                </div>

                                
                        </div>
        
        
                    </div>
                    
                </form>

                <form id="request_form" style="display: none;">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="name" id="request_name">
                    <input type="text" name="email" id="request_email">
                    <input type="text" name="phone" id="request_phone">
                    <input type="text" name="service" id="request_service">
                    <input type="text" name="location" id="request_location">
                    <input type="text" name="property" id="request_property">
                    <input type="text" name="rooms" id="request_rooms">
                    <input type="text" name="fan" id="request_fan">
                    <input type="text" name="acs" id="request_ac">
                    <input type="text" name="tvs" id="request_tv">
                    <input type="text" name="freezer" id="request_freezer">
                </form>
            </div>
        </div>
        </section>
        <!-- contact-form-area end -->
</main>
<!-- Main start end /-->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

    var form = document.getElementById('quote-form');
        form.addEventListener("submit", function(event){
            if (grecaptcha.getResponse() === '') {                            
              event.preventDefault();
              alert('Please check the recaptcha');
            }
          }
        , false);
    
    
    $(document).ready(function(){

        $("#quote-form").submit( function (e) {

                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');

                $(".loader").show();
                $(".quote-div").hide();
                
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

                            // $('.p_property').text($("#form-property option:selected").text());
                            $('.p_capacity').text(data.recomendation + ' Inverter' );
                            $('.p_property').text(document.getElementById("form-property").value);
                            $('.p_room').text(document.getElementById("form-room").value);
                            $('.p_tv').text($('#form-tv').val());
                            $('.p_ac').text($('#form-ac').val());
                            $('.p_freezer').text($('#form-freezer').val());


                            $('#request_name').val($('#form-name').val());
                            $('#request_email').val($('#form-email').val());
                            $('#request_phone').val($('#form-phone').val());
                            // $('#request_service').val($('#form-service').val());
                            $('#request_service').val(document.getElementById("form-service").value);
                            $('#request_location').val($('#form-location').val());
                            // $('#request_property').val($('#form-property').val());
                            $('#request_property').val(document.getElementById("form-property").value);
                            $('#request_rooms').val($('#form-room').val());
                            $('#request_ac').val($('#form-ac').val());
                            $('#request_tv').val($('#form-tv').val());
                            $('#request_freezer').val($('#form-freezer').val());
                            $('#request_fan').val($('#form-fan').val());

                            var products = data.products;
                            products.forEach(product => {
                                // document.getElementById("add_to_product").innerHTML += '<td>'+product.name+'</td><td>'+product.amount+'</td><td> <a href="http://shop.reohob.com/products/'+product.sku+'" target="_blank">View Product</a> </td>'

                                var myHtmlContent = '<td><b>'+product.name+'</b></td><td><b> &#8358;'+product.price.toLocaleString()+'</b></td><td> <b> <a href="http://shop.reohob.com/products/'+product.sku+'" target="_blank">View Product</a></b> </td>'

                                var tableRef = document.getElementById('product_table').getElementsByTagName('tbody')[0];

                                var newRow = tableRef.insertRow(tableRef.rows.length);
                                newRow.innerHTML = myHtmlContent;
                            });

                            

                            $(".loader").hide();

                        $(".response-div").show();
                            // swal("Your Order has been sent!", "You will be contacted by a member of our support team soon", "success");
                            // document.getElementById("quote-form").reset();
                            // $(".quote-div").show();
                        }else {

                            // console.log(data.message);
                            swal("An error occured!", "An error has occured please try again later", "warning");
                            $(".loader").hide();
                            $(".quote-div").show();

                        }
                        
                        
                    }
    
                });
    
        });
        
        $("#request_quote").click(function (e) {
            var form = $("#request_form");

            $.ajax({
                    type: 'POST',
                    url: '/request/quote',
                    // dataType: "json",
                    
                    async:true,
                    data: form.serialize(),
    
                    success: function(data) {
                            
                        if (data.message == "success") {

                            $(".loader").hide();
                            swal("Your request has been sent!", "You will be contacted by a member of our support team soon", "success");
                            document.getElementById("quote-form").reset();
                            $(".quote-div").show();
                            // $(".response-div").hide();
                            document.getElementById('response-div').style.display = 'none';
                        
                        }else {

                            // console.log(data.message);

                            swal("An error occured!", "An error has occured please try again later", "warning");
                            $(".loader").hide();
                            $(".quote-div").show();
                            $(".response-div").hide();

                        }
                        
                    }
    
                });
        });
    });

</script>
<?php $__env->stopSection(); ?>            
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/h9t9pt86bnje/Reohob/resources/views/web/quote.blade.php ENDPATH**/ ?>