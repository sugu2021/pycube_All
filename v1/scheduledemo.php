<!DOCTYPE html>
<html lang="en">
    <head>
<title>Schedule a Demo - Pycube | Asset Management Group | Asset Tracking</title>


<meta name="description"  content="Schedule a Demo - Pycube.  Please fill in the form to schedule a demo and we’ll get back to you shortly.">
        <?php include './includes/header_links.php'; ?>
    </head>
    <body>
        <!-- mobile menus -->
        <div class="mp-pusher" id="mp-pusher">

            <!-- mp-menu -->
            <?php include './includes/mobile_menu.php'; ?>
            <!-- /mp-menu -->

            <!-- header start here -->
            <?php include './includes/header.php'; ?>
            <!-- header ends here -->

            <div class="contact-us-banner internal-banner"> 
                <div class="overlay"> </div>  
                <div class="banner-content"> 
                    <h2>  Schedule a Demo </h2> 

                </div>

            </div> 




            <!-- content -->


            <div class="clear"> </div>
            <div class="services-section contactus">
                <div class="container">
                    <div class="row"> 
                        <div class="col-sm-12 pt40 scrollflow -pop -opacity int-con"> 
                            <h2 class="text-center">  Schedule a Demo </h2>
                            <p class="pt20">  Please fill in the form to schedule a demo and we’ll get back to you shortly.</p>

                        </div> 	
                    </div>
                    <div class="row"> 
                        
                        <div class="col-sm-5"> 
				
                            <form class="form mt-40 scrollflow -pop -opacity" method="post" id="scheduledemo_form" name="scheduledemo_form" action="" > 
                                
                                <div id="scheduledemo_form_res"></div>
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

                                    <input type="text" name="phone" id="scheduledemo_phone"  placeholder="Business Phone Number" class="form-control required" />
                                </div>
                                <div class="form-group">		

                                    <input type="text" name="company"  placeholder="Company" class="form-control required"  />
                                </div>
                                <div class="form-group">		
                                    <input type="text" name="title"  placeholder="Title" class="form-control required"  /> 

                                </div>
                                <div class="form-group">		

                                    <textarea name="message"  placeholder=" Message" ></textarea>
                                </div>
                                
                                <div class="form-group">
                                <p>
                                   Select a Demo
                                    <select name="demoname" class="form-control required">
                                    <option value="">Select...</option>
                                    <option value="RTLS Asset Location Demo">RTLS Asset Location Demo</option>
                                    <option value="RFID Loss Prevention Demo">RFID Loss Prevention Demo</option>
                                    <option value="CMMS Asset Management Demo">CMMS Asset Management Demo</option>
                                    <option value="Analytics / Capital Planning Demo">Analytics / Capital Planning Demo</option>
                                    <option value="CRA Compliance Rounding Automation Demo">CRA Compliance Rounding Automation Demo</option>
                                    <option value="Other">Other</option>
                                    </select>
                                    </p>
                                </div>
                                <div class="form-group">	
                                <p>
                                   Select a Date	
                                   <input type="text" id = "date" name ="date" class="form-control required">
                                       
                               </p>
                                </div>
                                <div class="form-group">
                                <p>
                                   Select a time slot
                                    <select name="time" class="form-control required">
                                    <option value="">Select...</option>
                                    <option value="09:00 - 10:00">9:00 - 10:00</option>
                                    <option value="10:00 - 11:00">10:00 - 11:00</option>
                                    <option value="11:00 - 12:00">11:00 - 12:00</option>
                                    <option value="12:00 - 13:00">12:00 - 13:00</option>
                                    <option value="13:00 - 14:00">13:00 - 14:00</option>
                                    <option value="14:00 - 15:00">13:00 - 14:00</option>
                                    <option value="15:00 - 16:00">13:00 - 14:00</option>
                                    <option value="16:00 - 17:00">13:00 - 14:00</option>
                                    <option value="After 17:00">After 17:00</option>
                                    </select>
                                    </p>
                                </div>
                                <div class="form-group">
                                <p>
                                   Select Time frame to choose a solution
                                    <select name="solution" class="form-control required">
                                    <option value="">Select...</option>
                                    <option value="30 - 90 Days">30 - 90 Days</option>
                                    <option value="90 - 180 Days">90 - 180 Days</option>
                                    <option value="180 + Days">180 + Days</option>
                                    </select>
                                    </p>
                                </div>

                                <div class="form-group">		 
                                    <button type="submit" name="scheduledemo_sbt" class="btn btn-primary"> Submit </button>
                                   
                                </div> 		

</form>

                            
                        </div>

                    </div>  
  

                </div>
              
            </div> 

            <div class="clear"> </div> 
            <!-- footer start here -->
            <?php include './includes/footer.php'; ?>            
            <!-- footer ends here --> 
        </div>  
        <?php include './includes/footer_links.php'; ?>
		
    </body>
    <link rel = "stylesheet" 
         href = "//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
      </script>
 
      <script>
         $(function() {

                var date = new Date();

                //Create Variable for first day of current month
                var firstDay = new Date(new Date().setDate(date.getDate()+1))
               
                var lastDay = new Date(new Date().setDate(date.getDate()+30))
                //var lastDay = date.+7;
                $( "#date" ).datepicker({ 
                    minDate: firstDay, 
                    maxDate: lastDay,
                    beforeShowDay: $.datepicker.noWeekends 
                });
               
           
         });
      </script>
</html>