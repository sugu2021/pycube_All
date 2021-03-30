<!DOCTYPE html>
<html lang="en">
    <head>
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

            <div class="syncsens-banner internal-banner"> 
                <div class="overlay"> </div>  
                <div class="banner-content"> 
                    <h2> SyncSens™ </h2> 
                    <p>  Add life to your assets with SyncSens™ </p>
                </div>

            </div> 




            <!-- content -->


            <div class="clear"> </div>
            <div class="services-section our-science-con">
                <div class="container">
                    <div class="row">


                        <div class="col-sm-12 int-con pt40 scrollflow -pop-opacity "> 
                            <h3 class="text-center">What – Why – How It Works – Types – Standards </h3> 


                            <div class="tab tab2">
								<div class="tabHeader">
									<ul>
									  <li class="w50 active rfid"> SyncSens™ RFID</li>
									  <li class="w50"> SyncSens™ RTLS/ BLE </li>
									  <li class="w100">SyncSens™ Environmental Monitoring</li>
									</ul>
								</div>
								<div class="tabContent clearfix">
									<div class="tabItem active">
									     <img src="img/solutions-asset-mgmt-image.jpg">
									     <p>  Utilize SyncSens™ Radio Frequency Identification (RFID) to track your assets within your facilities ingress and egress points. Ranging from passive to active RFID’s, tags are as specific as your hospital’s need. Alerts can be provided when your assets leave the facility or allow you to understand if your item is in storage or on a certain floor.  </p>
								        
									</div>
									<div class="tabItem clearfix" >
									     <img src="img/our-science-syncsens-image.jpg">
									     <p>  SyncSens™ Real-Time Location Sensors (RTLS) track assets through real-time in your facility. SyncSens™ RTLS have room level accuracy that allow you to know exactly what floor and what room you can find your assets in. By utilizing Bluetooth low energy (BLE), asset location data can be integrated with a floor map, so you can have a bird’s eye view of where all your assets are.</p>
									     
									</div>
									<div class="tabItem clearfix" >
									    <img src="img/our-science-applications-image.jpg">
										<p>  Maintain environmental control with a variety of sensors. SyncSens™ Temp Sensors are for making sure medication is stored properly, rooms are in the current temperature, and other temperature-related use cases. Plug in sensors for temperature, pressure, altimeter, accelerometer, humidity, barometric, and CO2 into the tag to properly track any component you need.   </p>
									  
										
									</div>
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
    </body>
</html>