<!-- Footer Start-->
<?php //include './includes/model.php'; ?>  
<footer>
    <div class="footer"> 

        <div class="footer-con"> 

            <div class="container">  
                <ul class="row"> 
                    <li>  
                        <h4> <a  href="solutions.php" > Solutions </a>	 </h4>
                        <ul>
                            <li> <a href="biomedical-management.php">For Biomed</a> </li>
                            <!-- <li> <a  href="patient-flow.php">For Patients</a> </li>
                            <li> <a  href="staff-management.php">For Staff</a> </li>
                            <li> <a  href="utility-management.php">For Utilities </a> </li> -->
							<li> <a  href="facilities-management.php">For Facilities </a> </li>
                        </ul>					   
                    </li>
                    <li>  
                        <h4> <a href="products.php"  id="Science"  >  Products     </a>  </h4>	
                        <ul>
                            <li> <a  href="aktivu.php">aktivu™</a> </li>
                            <li> <a  href="connectivity.php">Connectivity</a> </li>
                            <li> <a  href="syncsens.php">SyncSens™</a> </li>
							<!-- <li> <a  href="cra.php">CRA</a> </li> -->

                        </ul>
                    </li>
                    <li>  
                        <h4> <a  href="library.php" > Library    </a>  </h4>
                        <ul>
                            <li> <a href="case-studies.php">Case Studies</a> </li>
                            <li> <a  href="white-papers.php">White Papers</a> </li>
                            <li> <a  href="videos.php">Videos</a> </li>

                            <li> <a  href="blog.php">Blog</a> </li>
                        </ul>	
                    </li>
                    <li>  
                        <h4>  <a  href="about-us.php" >  About Us  </a>   </h4>
                        <ul>
                            <li> <a href="who-we-are.php">Who We Are</a> </li>
                            <li> <a  href="partners.php">Partners</a> </li>
                            <li> <a  href="events.php">Events</a> </li>
                            <li> <a  href="webinar.php">Webinars</a> </li>
                          <!--  <li> <a  href="careers.php">Careers</a> </li> -->

                        </ul>									
                    </li>
                    <li>  <h4>  <a   href="contact.php" > Contact Us  </a>   </h4>
                        <p> <a href="tel:1-800-866-8583"> <i class="fa fa-phone" aria-hidden="true"></i> 1-800-866-8583  </a> </p>
                        <p> <a href="mailto:sales@pycube.com"> <i class="fa fa-envelope" aria-hidden="true"></i>sales@pycube.com  </a>   </p>

                             <!-- <button type="button" class="btn touch_modal_btn" data-toggle="modal" data-target="#getintouch" 
                                 style="font-size: 13px !important; padding: 0px 15px !important; width: auto !important; height: 40px;  
                             border-radius: 5px;  margin-bottom: 5%; margin-top: 0px;">Get in touch with us </button> -->

                    </li>
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="copyrights clearfix">   
            <div class="container"> <span class="copyrights-con"> Pycube &copy; 2021 All rights reserved.   <span><a href="privacy.php"> Privacy Policy </a></span>  </span>
                <span id="social">
                    <a class="facebookBtn smGlobalBtn" href="https://www.facebook.com/pages/Pycube-Inc/372204282857237" target="_blank" ></a>
                    <a class="twitterBtn smGlobalBtn" href="https://twitter.com/pycube" target="_blank" ></a>
                    <!--<a class="googleplusBtn smGlobalBtn" href="#" target="_blank"></a>-->
                    <a class="linkedinBtn smGlobalBtn" href="https://www.linkedin.com/company/pycube" target="_blank"></a>


                </span> 
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

<style>

.get_h2 {
    font-size: 36px !important;
    padding: 20px 0px 0px 0px !important;
}

</style>