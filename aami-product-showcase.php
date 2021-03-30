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
				<div class="col-sm-12 pt40 scrollflow -pop -opacity int-con"> 
				    <h2 class="center">  Detect and Protect Your Assets with aktivu™ </h2>
							
					  <div class="timer">
						  <div id='content'>
						     
						
							<section>
							  <ul id="countdown">
								<li><span class="days timenumbers">01</span>
								  <p class="timeRefDays timedescription">Days</p>
								</li>
								<li><span class="hours timenumbers">00</span>
								  <p class="timeRefHours timedescription">Hours</p>
								</li>
								<li><span class="minutes timenumbers">00</span>
								  <p class="timeRefMinutes timedescription">Minutes</p>
								</li>
								<li><span class="seconds timenumbers yellow-text">00</span>
								  <p class="timeRefSeconds timedescription">Seconds</p>
								</li>
							  </ul>
							</section>
							 <p class="events-heading scrollflow -slide-right -opacity"> <a href="https://www.hlthcp.com/" target="_blank"> AAMI (Association for the Advancement of Medical Instrumentation)</a>  </p>
							 <p class="scrollflow -slide-left -opacity"> June 7-10, 2019, Cleveland, OH, Booth #439 </p>
							
							 
							<p class="started hide">Ongoing Event</p>
						  </div>
						</div>
							  
							  
				</div> 
			 </div>
			 
					 <div class="row"> 
						<div class="col-sm-12 int-con mt-20"> 
							
							 <p>
                               On Saturday, June 8th from 1:30 to 2:00 PM join Pycube as we discuss how to transform your data into actionable insights with Pycube’s Enterprise Asset Management platform, aktivu™. Gain real-time information regarding everything and anything between your enterprise assets, your patients, your staff, or your utilities through Pycube’s intelligent Enterprise Asset Management and Analytics platform, aktivu™. </p> <p> aktivu™ allows hospitals the opportunity to track and locate their assets, their wandering patients, keep an eye on staff hygiene, and better control their environment to preserve valuable perishables. The analytics within the platform allows management to analyze and transform the collected data into actionable insights in order to not only reduce operational costs, but also deliver better patient care and achieve smarter operations. To learn more about all Pycube has to offer, stop by our booth #439 at the AAMI Exchange in Cleveland, OH from June 7th – 10th, or complete the form below to have a representative reach out to you!							 
							 </p>
						      <button class="more-btn margin-auto" data-toggle="modal" data-target="#aami-model"> Learn more </button> 
						</div>
					  </div>
					  
					   
						
						
						 <div class="w80">
						
						  <div class="row"> 
							<div class="col-sm-6 int-con"> 
								 <div class="event-container">
								  <img src="img/1.png" alt="Avatar" class="image">
								  <div class="img-overlay">
									<div class="event-con"> 
										<!-- <h3> Hear Pycube at AAMI’s IOTXperience </h3> -->
										<h3>Visit Us at AAMI</h3>
										<p> 
										  Stop by booth #439 at AAMI to learn more about how Pycube helps hospitals do what they do best – deliver quality patient care.  
										</p>
									</div>
								  </div>
								</div>
							</div>
							<div class="col-sm-6 int-con"> 
								 <div class="event-container">
									  <img src="img/3.png" alt="Avatar" class="image">
									  <div class="img-overlay">
										<div class="event-con"> 
										 <!--<h3 class="mt-10"> See our solution in action at the Product Showcase </h3> -->
										 <h3 class="mt-10">Watch Pycube speak at AAMI’s IOTXperience</h3>
										 <p> Interested in learning more about how IoTs are shaping the healthcare industry – and how to leverage the data collected from them? Stop by the IOTXperience on Sunday, June 9th at 2:30 PM. Stop by our booth #439 to talk more about how Pycube can help make the most of your IoTs.   </p>								 
									   </div>
									  </div>
									</div>
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
        date: "8 June 2019 13:30:00",

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