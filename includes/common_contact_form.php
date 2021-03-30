               

<div class="container">
    <div class="row pb-5"> 
        <div class="col-md-8 mx-auto text-center">
            <button type="button" class="btn touch_modal_btn" data-toggle="modal" data-target="#getintouch">Get in touch with us </button>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="getintouch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content index_mod_content" style="border: none !important;border-radius: 5px !important;">
             <div class="modal-header testimonials">
                <h2 class="modal-title get_h2" id="exampleModalLabel">Get in touch</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <div class="row"> 
                    
                    <div class="col-sm-12 col-md-12 mx-auto"> 
                        <script type="text/javascript">
                         var onloadCallback = function() {
                            widgetId1 = grecaptcha.render('g-recaptcha', {
                              'sitekey' : '6LcM8tAUAAAAADuO9E9OEty6Qk-Ws2VgLJl34ur3',
                                 'theme' : 'light'
                             });
                            }
                        </script>



                        <form class="form scrollflow -pop -opacity" method="post" id="contactus_form" action="" > 
                            <!-- <div class="form-group"> <h3> Get in touch </h3> </div> -->
                            <div id="contactus_form_res"></div>
                            <div class="form-group pt10">
                                <input type="text" name="fname" placeholder="First Name"  class="form-control required" /> 
                            </div>
                            <div class="form-group">
                                <input type="text" name="lname" placeholder="Last Name"  class="form-control required"/>
                            </div>
                            <div class="form-group">

                                <input type="email" name="email" placeholder="Business E-mail Address"  class="form-control required" />
                            </div>
                            <div class="form-group">		

                                <input type="text" name="phone" id="contactus_phone"  placeholder="Business Phone Number" class="form-control required" />
                            </div>
                            <div class="form-group">		

                                <input type="text" name="company"  placeholder="Company" class="form-control required"  />
                            </div>
                            <div class="form-group">		
                                <input type="text" name="title"  placeholder="Title" class="form-control required"  /> 

                            </div>
                            <div class="form-group">		

                                <textarea name="message"  placeholder="Message" class="form-control required"></textarea>
                            </div>
                            <div class="form-group">
                            <div id="g-recaptcha"></div>
                            <!--
                            <div class="g-recaptcha" id="g-recaptcha" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LcM8tAUAAAAADuO9E9OEty6Qk-Ws2VgLJl34ur3"></div> -->
                            </div>
                            <div class="form-group  text-center">		 
                                <button type="submit" name="contactus_sbt" class="btn btn-primary"> Contact me </button>
                                <p class="small mt0"> By submitting the form you agree to receive emails from Pycube,Inc. You can unsubscribe at any time. </p>
                            </div> 		

                        </form>


                    </div>

                </div>  
            </div>
    
        </div>
    </div>
</div>

