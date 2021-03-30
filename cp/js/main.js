$(document).ready(function() {
	$('.pump_check').click(function() {
		$('.add_active').addClass("check_active_circle");
		$('.checkposition').removeClass("hide");
		$('.pumps_box').removeClass("hide");
	}); 
	$('.check_pump').click(function() {
		$('.add_bg').addClass("select_highlight");
		$('.graph_box').removeClass("hide");
	}); 
  //change colour when radio is selected
  $('#select_pump').click(function() {
    // Only remove the class in the specific `box` that contains the radio
    // $('.custom_media .highlight').removeClass('highlight');
    // $(this).find('.custom_media').addClass('highlight');
});
});