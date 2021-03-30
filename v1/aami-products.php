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
				    <h3 class="title-heading"> Improve Patient Care, Reduce Costs  and Transform Your Healthcare Facility with Pycube’s Products and Solutions. </h3>
							
					  
							  
							  
				</div> 
			 </div>
			 
					
					  
				       <div class="row mt-10"> 
							<div class="col-sm-12 col-md-6 service-img scrollflow -pop -opacity int-con-img">  <img src="img/cloud-img.png"> </div>
							<div class="col-sm-12 col-md-6 float-right pt70 scrollflow -pop -opacity int-con"> 
								
								<p> Is your Asset Management System or CMMS a competitive advantage to your organization? Improving your enterprise asset management system with loss prevention and asset tracking capabilities has been shown to lower costs, improve care, and reduce staff frustration and yet many don’t make it a priority. Learn more about Pycube’s intelligent, Ai- and Blockchain-enabled Enterprise Asset Management and Analytics Platform. </p>
                                <div> <a href="aktivu.php"  class="more-btn"> Learn more </a></div> 
							</div> 	
						</div>
						
						 <div class="row"> 
							<div class="col-sm-12 col-md-6 service-img scrollflow -pop -opacity int-con-img float-right xs-show">  <img src="img/asset-mgmt-image-1.png"> </div>
							<div class="col-sm-12 col-md-6 t pt70 scrollflow -pop -opacity  int-con"> 
								
								<p> Integrating RFID and RTLS technology is a proven solution for asset tracking and loss prevention needs. Gaining information and actionable insights about your healthcare facility begins with collecting data about your environment. Learn more about Pycube’s SyncSens™ technology that allows hospitals to collect data and move towards a data-driven center. </p>
                                 <div> <a href="syncsens.php"  class="more-btn"> Learn more </a></div> 
							</div> 
                            <div class="col-sm-12 col-md-6 service-img scrollflow -pop -opacity int-con-img float-right xs-hidden"> <img src="img/asset-mgmt-image-1.png"> </div>							
							
						</div>
						
						 <div class="row"> 
							<div class="col-sm-12 col-md-6 service-img scrollflow -pop -opacity int-con-img">  <img src="img/solutions-utility-mgmt-image.png"> </div>
							<div class="col-sm-12 col-md-6 float-right pt70 scrollflow -pop -opacity int-con"> 
								
								<p> While each hospital is different, the use cases that come up tend to be similar across healthcare facilities. Whether it’s a need to prevent loss of telemetry devices, to easily locate assets, or to improve hand hygiene compliance, Pycube has a solution that both is catered to your specific facility while also allowing you to benefit from best practices in the industry. Learn more about all the solutions Pycube has that allows hospitals to gain greater insights into their facilities.  </p>
                                  <div> <a href="solutions.php"  class="more-btn"> Learn more </a></div> 
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
        date: "9 JUne 2019 14:30:00",

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