<!-- Modal -->
<style>
    .error{
        color:red;
    }
</style>
<div class="modal fade" id="casestudies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Subscribe to Case Studies</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="casestudies_form_res"></div>
                <form method="post" class="" id="casestudies_form" action=""> 
                    <div class="form-group"> 

                        <input type="text" name="fname" id="fname" value="" placeholder="First Name"  class="form-control required" /> 
                    </div>
                    <div class="form-group">

                        <input type="text" name="lname" value="" placeholder="Last Name"  class="form-control required"/>
                    </div>
                    <div class="form-group">

                        <input type="email" name="email" value="" id="email" placeholder="Business E-mail Address"  class="form-control required" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="" id="casestudies_phone" placeholder="Business Phone Number" class="form-control required" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="company" value="" id="company" placeholder="Company" class="form-control required"  />
                    </div>
                    <div class="form-group">		
                        <select class="form-control required" name="title" id="title" > 
                            <option value="" selected="true"> Title  </option>
                            <option > Asset Management Solutions  </option> 
                            <option> Patient Flow Management  </option> 
                            <!--                            <option> Staff Management  </option> -->
                            <option> Utility Management  </option> 
                        </select> 

                    </div>
                    <div class="form-group">		

                        <textarea name="message" id="message"  placeholder="Message" class="form-control required"></textarea>
                    </div>
                    <div class="form-group">		 
                        <button type="submit" name="casestudies_sbt" class="btn btn-primary" value="">Submit</button>
                    </div> 		

                </form>
            </div>

        </div>
    </div>
</div>


<!-- White papers Modal -->
<div class="modal fade" id="whitepapers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Subscribe to White Papers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="whitepapers_form_res"></div>
                <form method="post" class="" id="whitepapers_form" action=""> 
                    <div class="form-group">

                        <input type="text" name="fname" placeholder="First Name"  class="form-control required" /> 
                    </div>
                    <div class="form-group">

                        <input type="text" name="lname" placeholder="Last Name"  class="form-control required"/>
                    </div>
                    <div class="form-group">

                        <input type="email" name="email" placeholder="Business E-mail Address"  class="form-control required" />
                    </div>
                    <div class="form-group">		

                        <input type="text" name="phone" id="whitepapers_phone"  placeholder="Business Phone Number" class="form-control required" />
                    </div>
                    <div class="form-group">		

                        <input type="text" name="company"  placeholder="Company" class="form-control required"  />
                    </div>
                    <div class="form-group">		
                        <input type="text" name="title" placeholder="Title" class="form-control required"  /> 

                    </div>
                    <div class="form-group">
                        <textarea name="message"  placeholder="Message" class="form-control required"></textarea>
                    </div>
                    <div class="form-group">		 
                        <button type="submit" name="whitepapers_sbt" class="btn btn-primary">Submit</button>
                    </div> 		

                </form>
            </div>

        </div>
    </div>
</div>



<!-- News Letter Modal -->
<div class="modal fade" id="newsletter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Subscribe to Our News Letter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="newsletter_form_res"></div>
                <form method="post" class="" id="newsletter_form" action="">

                    <div class="form-group">

                        <input type="email" name="email" placeholder="Business E-mail Address"  class="form-control" />
                    </div>

                    <div class="form-group">		 
                        <button type="submit" name="newsletter_sbt" class="btn btn-primary">Submit</button>
                    </div> 		

                </form>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="careers-model" tabindex="-1" role="dialog" aria-labelledby="careersModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" class="careers-form" id="careers_form" action="" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="careersModelLabel"> Apply for Job </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="careers_form_res"></div>
                    <h4>Job Title:  <span id="job_title_span"></span></h4>

<!--                    <input type="hidden" name="job_title" id="job_title"   class="form-control" required />-->
                    <input type="text" name="name" id="careers_name"  placeholder="Name" class="form-control" required value=""/> 
                    <input type="text" name="phone" id="careers_phone"  placeholder="Phone Number" class="form-control" required  /> 
                    <input type="text" name="email" id="careers_email"  placeholder="E-mail" class="form-control" required value=""/> 
                    <textarea name="message" id="careers_message" placeholder="Message" class="form-control" required></textarea>
                    <input type="file" name="resume"  placeholder="Upload Resume" class="form-control upload" accept="application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf" required/> 
                </div>
                <div class="modal-footer">

                    <button type="submit" name="careers_form_sbt" class="btn apply-btn" >Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="aami-model" tabindex="-1" role="dialog" aria-labelledby="aamiModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aamiModelLabel"> Get in touch </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="aami_form_res"></div>
                <form class="mt-10" id="aami_form" action="">
                    <div class="form-group pt10">
                        <input type="text" name="fname" placeholder="First Name"  class="form-control"  required /> 
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" placeholder="Last Name"  class="form-control" required />
                    </div>
                    <div class="form-group">

                        <input type="email" name="email" placeholder="Business E-mail Address" required  class="form-control" />
                    </div>
                    <div class="form-group">		

                        <input type="text" name="phone" id="aami_phone"  placeholder="Business Phone Number" required class="form-control" />
                    </div>
                    <div class="form-group">		

                        <input type="text" name="company"  placeholder="Company" class="form-control"  required />
                    </div>
                    <div class="form-group">		
                        <input type="text" name="title"  placeholder="Title" class="form-control"  required /> 

                    </div>
                    <div class="form-group">		

                        <textarea name="message"  placeholder="Message" required class="form-control"></textarea>
                    </div>
                    <div class="form-group">		 
                        <button type="submit" name="aami_sbt" class="btn btn-primary"> Contact Us </button>

                    </div>
                </form> 
            </div>

        </div>
    </div>
</div>



<script src="plugins/jquery-validation-1.19.0/lib/jquery.mockjax.js"></script>
<script src="plugins/jquery-validation-1.19.0/lib/jquery.form.js"></script>
<script src="plugins/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
<script src="plugins/jquery-validation-1.19.0/dist/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script>

    jQuery(function () {

        $(".apply-btn").click(function () {
            var job_title = $(this).attr("rel");
            console.log(job_title);
            //$("#job_title").val(job_title);
            $("#job_title_span").html(job_title);
        });
        $(".casestudies").click(function () {
            $("#casestudies_form_res").html("");
            $("#casestudies_form").resetForm();
        });
        $("#casestudies_phone").mask("(999) 999-9999");
        $("#casestudies_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneUS: true
                }
            }
        });
        $("#casestudies_form").ajaxForm({
            url: 'includes/casestudies_form.php',
            data: $('#casestudies_form').serialize(),
            type: 'post',
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status) {
                    $("#casestudies_form_res").html("<p class='alert alert-success'>" + result.message + "</p>");
                    $("#casestudies_form").resetForm();
window.location = "https://www.pycube.com/thank-you.php";     
                return true;
                } else {
                    $("#casestudies_form_res").html("<p class='alert alert-danger'>" + result.message + "</p>");
                }
            }
        });
        //White papers start
        $(".whitepapers").click(function () {
            $("#whitepapers_form_res").html("");
            $("#whitepapers_form").resetForm();
        });
        $("#whitepapers_phone").mask("(999) 999-9999");
        $("#whitepapers_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneUS: true
                }
            }
        });
        $("#whitepapers_form").ajaxForm({
            url: 'includes/whitepapers_form.php',
            data: $('#whitepapers_form').serialize(),
            type: 'post',
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status) {
                    $("#whitepapers_form_res").html("<p class='alert alert-success'>" + result.message + "</p>");
                    $("#whitepapers_form").resetForm();
window.location = "https://www.pycube.com/thank-you.php";     
                return true;
                } else {
                    $("#whitepapers_form_res").html("<p class='alert alert-danger'>" + result.message + "</p>");
                }
            }
        });
        //White papers end


        //News Letter start
        $(".newsletter").click(function () {
            $("#newsletter_form_res").html("");
            $("#newsletter_form").resetForm();
        });
        $("#newsletter_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            }
        });
        $("#newsletter_form").ajaxForm({
            url: 'includes/newsletter_form.php',
            data: $('#newsletter_form').serialize(),
            type: 'post',
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status) {
                    $("#newsletter_form_res").html("<p class='alert alert-success'>" + result.message + "</p>");
                    $("#newsletter_form").resetForm();
window.location = "https://www.pycube.com/thank-you.php";     
                return true;
                } else {
                    $("#newsletter_form_res").html("<p class='alert alert-danger'>" + result.message + "</p>");
                }
            }
        });
        //News Letter end
        
        // AAMI Start
        $("#aami_phone").mask("(999) 999-9999");
        $("#aami_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneUS: true
                }
            }
        });
        $("#aami_form").ajaxForm({
            url: 'includes/aami_form.php',
            data: $('#aami_form').serialize(),
            type: 'post',
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status) {
                    $("#aami_form_res").html("<p class='alert alert-success'>" + result.message + "</p>");
                    $("#aami_form").resetForm();
window.location = "https://www.pycube.com/thank-you.php";     
                return true;
                } else {
                    $("#aami_form_res").html("<p class='alert alert-danger'>" + result.message + "</p>");
                }
            }
        });
        // AAMI End

        $("#contactus_phone").mask("(999) 999-9999");
        $("#contactus_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneUS: true
                } 
            }
        });
        $("#contactus_form").ajaxForm({
            url: 'includes/contactus_form.php',
            data: $('#contactus_form').serialize(),
            type: 'post',
			beforeSubmit : function(arr, $form, options){
			  var g_captcha_res =  grecaptcha.getResponse(widgetId1);
             if(g_captcha_res == "")
             {				 
                return false; 
             }
             

          },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status) {
                    $("#contactus_form_res").html("<p class='alert alert-success'>" + result.message + "</p>");
                    $("#contactus_form").resetForm();
                    window.location = "https://www.pycube.com/thank-you.php";     
                return true;
                } else {
                    $("#contactus_form_res").html("<p class='alert alert-danger'>" + result.message + "</p>");
                }
            }
        });
////////////////////////////////////////////////////////////
$("#scheduledemo_phone").mask("(999) 999-9999");
        $("#scheduledemo_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneUS: true
                } 
            }
        });
        $("#scheduledemo_form").ajaxForm({
            url: 'includes/scheduledemo_form.php',
            data: $('#scheduledemo_form').serialize(),
            type: 'post',
		// 	beforeSubmit : function(arr, $form, options){
		// 	  var g_captcha_res =  grecaptcha.getResponse(widgetId1);
        //      if(g_captcha_res == "")
        //      {				 
        //         return false; 
        //      }
             

        //   },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status) {
                    $("#scheduledemo_form_res").html("<p class='alert alert-success'>" + result.message + "</p>");
                    $("#scheduledemo_form").resetForm();
window.location = "https://www.pycube.com/thank-you.php";     
                return true;
                } else {
                    $("#scheduledemo_form_res").html("<p class='alert alert-danger'>" + result.message + "</p>");
                }
            }
        });

/////////////////////////////////////////////////////////////////
        
        $("#careers_phone").mask("(999) 999-9999");
        $("#careers_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneUS: true
                },
                resume: {
                    accept: "application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf"
                }
            },
            messages: {
                resume: {
                    accept: "Please upload .doc or .pdf"
                }
            }
        });
        $("#careers_form").ajaxForm({
            beforeSubmit: function (formData, jqForm, options) {
                var job_title = $("#job_title_span").html();
                formData.push({name: "job_title", value: job_title, type: "hidden", required: true});
                return true;
            },
            url: 'includes/careers_form.php',
            //data: $('#careers_form').serialize(),
            type: 'post',
            success: function (data) {
                console.log(data);
                var result = JSON.parse(data);
                if (result.status) {
                    $("#careers_form_res").html("<p class='alert alert-success'>" + result.message + "</p>");
                    $("#careers_form").resetForm();
window.location = "https://www.pycube.com/thank-you.php";     
                return true;
                } else {
                    $("#careers_form_res").html("<p class='alert alert-danger'>" + result.message + "</p>");
                }
            }
        });
    });

</script>