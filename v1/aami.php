<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './includes/header_links.php'; ?>
		 <link rel="stylesheet"  href="css/lightslider.css"/>
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


            <div class="aami-banner internal-banner"> 
                <div class="overlay"> </div>  
                <div class="banner-content"> 
				    <div class="aami-img"> <img src="img/aami.png"  alt="AAMI" />  </div>
                     <h3> Cleveland, OH  </h3> 
					
                     <p> June 7-10, 2019</p> 
                </div>

            </div> 



            <!-- content -->


            <div class="clear"> </div>
            <div class="services-section aami">
                <div class="container">
                    
					<div class="row"> 
						<div class="col-sm-4  scrollflow -pop -opacity"> 
						   <div class="left-column"> 
						 
							<h3> Visit Us at AAMI    </h3>	
                             <p> Stop by to hear us present more about who we are and what we do here at Pycube, Inc. Visit us during the following events to learn more about how your healthcare facility can benefit from IoTs and analytics.</p>
                             <!--<h3> Hear Pycube at AAMI’s IOTXperience   </h3> -->	
							 <H3>Watch Pycube speak at AAMI’s IOTXperience</H3>
							<p> Interested in learning more about how IoTs are shaping the healthcare industry – and how to leverage the data collected from them? Stop by the IOT Xperience on Sunday, June 9th at 2:30 PM. As well, come visit us at our booth #439 to talk more about how Pycube can help make the most of your IoTs. </p>
                            <h3> See our solution in action at the Product Showcase   </h3>	
							<p> Interested in learning more of the products that allow Pycube to help hospitals? Stop by our Product Showcase on Saturday, June 8th at 1:30PM. Visit our booth #439 and we can talk more about how to help your healthcare facility thrive.  </p>							
						  </div>		  
						</div>
						<div class="col-sm-8 pt40 scrollflow -pop -opacity"> 
						   <div class="right-column">
						 
							<h2> Achieve Smart Operations </h2>  
							<p> From providing IoT hardware through SyncSens™ to deriving analytics from data collected, Pycube has built our all-inclusive solution with the healthcare industry in mind. 
							 Pycube is an innovative technology company with a special focus on providing Enterprise Asset Management and Analytics Solutions to the Healthcare Industry. </p> 
							 <p> Pycube’s modular, intelligent solution is built with your specific hospital in mind. Being a use-case driven solutions provider company, Pycube allows hospitals to see their return quickly and helps them reduce capital expenditures. 
							 Learn how Pycube can help you increase revenue, increase utilization of assets, and ultimately move to a data driven decision making facility all for your hospitals advancement. 
							 To learn more about all Pycube has to offer, stop by our booth #439 at the AAMI Exchange in Cleveland, OH from June 7th – 10th, or complete the form below to have a representative reach out to you! </p>
							
						      <button class="more-btn" data-toggle="modal" data-target="#aami-model"> Learn more </button> 
						   
						   </div>	
								  
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
		
		<script src="js/lightslider.js"></script> 
 <script>
          (function($) {
            $.fn.countdown = function(options, callback) {
        //custom 'this' selector
        thisEl = $(this);

        // array of custom settings
        var settings = {
          'date': null,
          'format': null
        };

        // append the settings array to options
        if (options) {
          $.extend(settings, options);
        }

        //create the countdown processing function
        function countdown_proc() {
          var eventDate = Date.parse(settings.date) / 1000;
          var currentDate = Math.floor($.now() / 1000);

          if (eventDate <= currentDate) {
            callback.call(this);
            clearInterval(interval);
          }

          var seconds = eventDate - currentDate;

          var days = Math.floor(seconds / (60 * 60 * 24));
            //calculate the number of days

            seconds -= days * 60 * 60 * 24;
            //update the seconds variable with number of days removed

            var hours = Math.floor(seconds / (60 * 60));
            seconds -= hours * 60 * 60;
            //update the seconds variable with number of hours removed

            var minutes = Math.floor(seconds / 60);
            seconds -= minutes * 60;
            //update the seconds variable with number of minutes removed

            //conditional statements
            if (days == 1) { thisEl.find(".timeRefDays").text("day"); } else { thisEl.find(".timeRefDays").text("Days"); }
            if (hours == 1) { thisEl.find(".timeRefHours").text("hour"); } else { thisEl.find(".timeRefHours").text("Hours"); }
            if (minutes == 1) { thisEl.find(".timeRefMinutes").text("minute"); } else { thisEl.find(".timeRefMinutes").text("Minutes"); }
            if (seconds == 1) { thisEl.find(".timeRefSeconds").text("second"); } else { thisEl.find(".timeRefSeconds").text("Seconds"); }

            //logic for the two_digits ON setting
            if (settings.format == "on") {
              days = (String(days).length >= 2) ? days : "0" + days;
              hours = (String(hours).length >= 2) ? hours : "0" + hours;
              minutes = (String(minutes).length >= 2) ? minutes : "0" + minutes;
              seconds = (String(seconds).length >= 2) ? seconds : "0" + seconds;
            }

            //update the countdown's html values.
            thisEl.find(".days").text(days);
            thisEl.find(".hours").text(hours);
            thisEl.find(".minutes").text(minutes);
            thisEl.find(".seconds").text(seconds);
          }

        //run the function
        countdown_proc();

        //loop the function
        interval = setInterval(countdown_proc, 1000);
      };

    })(jQuery);



//Provide the plugin settings
$("#countdown").countdown({
        //The countdown end date
        date: "30 May 2019 13:00:00",

        // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
        format: "on"
      },

      function() {
        // This will run when the countdown ends
        $('#countdown').addClass('hide');
        $('.started').removeClass('hide');
        
      });



</script>
<script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true,
				speed:1000,
                auto:true
            });
           
		});
    </script>
		
    </body>
</html>