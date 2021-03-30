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


            <div class="webinar-banner internal-banner"> 
                <div class="overlay"> </div>  
                <div class="banner-content"> 
                    <h2> Webinars </h2> 
					
                    <p> Join, Learn and make a difference </p>
                </div>

            </div> 



            <!-- content -->


            <div class="clear"> </div>
            <div class="services-section webinar">
                <div class="container">
                    
					  <div class="row"> 
				<div class="col-sm-12 pt40 scrollflow -pop -opacity int-con"> 
				      <h2 class="center">   Upcoming Webinar</h2>
				      <h3 class="center mt20 events-heading">  Re-imagine Your Enterprise Assets with IoT's </h3>
					  <p class="grey center">  Time: Thursday, May 2, 2019 1:00 PM - 1:45 PM ET </p>
					  
					 
					  
					 







					  
					  
							
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
							
							 
							<p class="started hide"></p>
						  </div>
						</div>
						
						<div> 
						
						    <div class="center mt20">
								  <h4 class="events-heading">   In this webinar, we will share:   </h4>
								  <ul class="dis-list"> 
									<li>  What enterprise asset management systems can offer hospitals </li>
									<li> How to track, locate and manage your assets </li>

									<li>	How to address loss of assets in your hospital </li>

									<li>	How to maximize your asset utilization  </li>
 
									<li>	How to derive critical insights from your asset data </li>
									</ul>


									
								 
								  <div class="btn register-btn">    <a href="https://attendee.gotowebinar.com/register/6968343355685192972">  Register Now  </a> </div>
								   <p class="blue-italic">  If you’re unable to attend live, still register! We’ll provide access to our on-demand webinar after the event </p>
							  </div>
						
						</div>
							  
							  
				</div> 
			 </div>
              
			 
			  	
             
				 
					
					 	
                </div>

                <!-- Customer Stories Start -->
                <?php include './includes/customer_stories.php'; ?>
                <!-- Customer Stories End -->
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
        date: "2 May 2019 13:00:00",

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