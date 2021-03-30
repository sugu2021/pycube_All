<!--  CSS and JS script's in footer tag start -->


 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!-- <script type="text/javascript" src="plugins/jquery/2.1.3/jquery.min.js"></script> -->
<script  src="js/index.js"></script>
<script type="text/javascript" src="js/jquerypp.custom.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript" src="js/eskju.jquery.scrollflow.min.js"></script>
<script type="text/javascript">
    $('#carousel').elastislide();
</script>
<script src="js/modernizr.custom.js"></script>
<!-- particles scripts start -->
<?php $filename = baseName($_SERVER['REQUEST_URI']);
      if($filename == "products.php"){
 ?>
<script src="particles.js"></script>
<script src="js/app.js"></script>
<script src="js/stats.js"></script>
	  <?php } ?>
<!-- particles scripts end -->	  
<!-- mobile menus -->
<script src="js/classie.js"></script>
<script src="js/mlpushmenu.js"></script>
<script>
    new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'));
</script>
<!-- mouse over tabs -->
<script type="text/javascript" src="js/jQuery.tab.js"></script>
<script type="text/javascript">
	$(function() {
				
		$('.tab2').tab({
			trigger_event_type: 'mouseover' 
	});
	
});
$(document).ready(function() {
 $('ul.main-nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
});

</script>
<script>
  	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 100){
		  $("header").addClass("shrink");
		}
		else
		{
			$("header").removeClass("shrink");
		}
	});
</script>
<!-- scrollb ar js-->
<script src="js/simplebar.js"></script>
<!--  CSS and JS script's in footer tag end -->
<!-- Load model page -->
<?php include './includes/model.php'; ?>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101093028-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Begin Web-Stat code v 6.3 -->
<span id="wts1861242">&nbsp;</span><script>
var wts=document.createElement('script');wts.type='text/javascript';
wts.async=true;wts.src='https://wts.one/2/1861242/log6_2.js';
document.getElementById('wts1861242').appendChild(wts);
</script><noscript><a href="https://www.web-stat.com">
<img src="https://wts.one/6/2/1861242.gif" 
style="border:0px;" alt="Web-Stat traffic analysis"></a></noscript>
<!-- End Web-Stat code v 6.3 -->
</footer>  


<!-- Footer end-->
