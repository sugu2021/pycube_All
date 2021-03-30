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
				    <h2 class="center">  IoT in Hospitals? Urgent, Important, and Unavoidable </h2>
							
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
							
							 <p> On Sunday, June 9th at 2:30 PM Pycube will begin to share their expertise on IoTs within the healthcare field. While IoTs are here to stay and are the future, how IoTs play a role is for the hospitals to decide. Hospitals can use IoTs to track patients, help patients find their way around, help nurses locate assets, help biomedical departments keep track of assets, maximize utilization and complete preventative maintenance on time, and stop assets from walking out of the hospital. IoTs can also help hospitals adhere to their environmental and compliance requirements.  The value IoTs deliver is only limited by how hospitals seek to benefit from this technology. Learn more on how Pycube is helping hospitals leverage IoTs.    </p>
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
										<!-- <h3> Hear Pycube at AAMI’s IOT experience </h3> -->
										<h3>Visit Us at AAMI</h3>
										<p> Stop by booth #439 at AAMI to learn more about how Pycube helps hospitals do what they do best – deliver quality patient care.  </p>
									</div>
								  </div>
								</div>
							</div>
							<div class="col-sm-6 int-con"> 
								 <div class="event-container">
									  <img src="img/2.png" alt="Avatar" class="image">
									  <div class="img-overlay">
										<div class="event-con"> 
											 <h3 class="mt-10">  See our solution in action at the Product Showcase</h3>
											 <p> Interested in learning more of the products that allow Pycube to help hospitals? Stop by our Product Showcase on Saturday, June 8th at 1:30 PM. Stop by our booth #439 to talk more about the products and Pycube offers.  </p>								 
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
        date: "9 June 2019 14:30:00",

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
	
	
	<script type='text/javascript'>
$(document).ready(function(){

$(".aami.img").hover(
function() {
$(this).stop().animate({"opacity": "0"}, "slow");
},
function() {
$(this).stop().animate({"opacity": "1"}, "slow");
});

});
</script>
		
    </body>
</html>