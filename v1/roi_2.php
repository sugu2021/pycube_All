<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="plugins/jquery-validation-1.19.0/lib/jquery.mockjax.js"></script>
        <script src="plugins/jquery-validation-1.19.0/lib/jquery.form.js"></script>
        <script src="plugins/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
        <script src="plugins/jquery-validation-1.19.0/dist/additional-methods.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>


        <style>
            * {
                box-sizing: border-box;
            }
            body{
                background: #f3f3f4;
            }
            .price {
                list-style-type: none;
                /*border: 1px solid #eee;*/
                background: #fff;
                margin: 0;
                padding: 0px 0px 20px 0px;
                -webkit-transition: 0.3s;
                transition: 0.3s;
                margin-bottom: 10px;
                border-radius: 5px;
            }

            /*.price:hover {
                    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
                    }*/

            .price .header {
                background-color: #ffffff;
                color: #00aee7;
                font-size: 16px;
                padding: 10px 15px;
                text-align: left;
                font-weight: 500;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
            .price .header2 {
                color: #00aee7;
                text-align: left;
                padding: 10px 15px;
                font-weight: 500;
                font-size: 15px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            .price li {
                padding:8px 0px;
                text-align: center;
                display:block;
                clear:both;

            }

            .price .grey {
                background-color: #fff;
                font-size: 12px;
                padding: 0px 15px 5px;
                text-align: left;
                color: #014861;
            }

            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 25px;
                text-align: center;
                text-decoration: none;
                font-size: 18px;
            }
            .sub-input{
                color:#666;

            }
            .sub-text{
                font-size:13px;
                color:#666;
                text-align:right;
            }
            .sub-input input, .input-value{
                border:1px solid #CCC;
                color:#333;
                padding:0px 5px;
                font-size: 14px;
            }
            .col-md-4{
                padding:0px 8px;
            }
            .error{
                color: red;

                padding: 0px;
                width: 100%;
                font-size: 11px;
                text-align: left;
            }

            .col-form-label{
                font-size: 12px;
                text-align: left;
                font-weight: 400;
                color: #868686;
            }
            .first_fom{
                background: #fff;
                padding: 5px;
                margin: 15px 10px;
                border-radius: 5px;
                max-width: 1010px;
                margin: 0px auto 10px;
            }
            .bg_header{
                background: #fff;
                padding: 12px 15px;
                position: fixed;
                width: 100%;
                top: 0px;
                z-index: 1;
                -o-box-shadow: 0 5px 10px 0 rgba(97,97,97,.2);
                -moz-box-shadow: 0 5px 10px 0 rgba(97,97,97,.2);
                -ms-box-shadow: 0 5px 10px 0 rgba(97,97,97,.2);
                -webkit-box-shadow: 0 5px 10px 0 rgba(97,97,97,.2);
                box-shadow: 0 5px 10px 0 rgba(97,97,97,.2);
            }
            .same_box{
                padding: 0px 0px;
                background: #fff;
                margin-bottom: 10px;
                padding-top: 15px;
                padding-bottom: 15px;
                background-color: #eee;
                background-color: rgba(255, 255, 255, 1);
                border: 1px solid #ddd;
                border: 1px solid rgba(86,61,124,.2);
            }
            @media only screen and (max-width: 600px) {
                .columns {
                    width: 100%;
                }
            }

            label{
                font-weight: 300;
            }

            .price p{
                margin-bottom: 0px;
                font-size: 12px;
            }
            .col-md-12{
                padding-left: 10px;
                padding-right: 10px;
            }

            .copyrights {
                padding: 10px 0px 5px 0px;
            }

            .copyrights {
                background: rgba(0,0,0,0.5);
                color: #FFF;
                font-size: 11px;
                padding: 5px 0px;
            }
            #social {
                display: inline-block;
                text-align: right;
                margin-left: 10px;
                padding-bottom: 10px;
                float: right;
                padding-top: 5px;
            }
            .main_form{
                max-width: 1000px;
                margin: 0px auto;
            }
        </style>
        <script>
            $(document).ready(function () {
                $("#phone_num").mask("(999) 999-9999");
                $("#roi_form").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        phone_num: {
                            required: true,
                            phoneUS: true
                        }
                    }
                });


            });
        </script>
        <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function ($scope) {
                $scope.hv_total_asset;
                $scope.hv_asset_avg_cost;
                $scope.hv_total_asset_value;

                $scope.HVAssetLossReduction = function () {
                    $scope.hv_total_asset_value = $scope.hv_total_asset * $scope.hv_asset_avg_cost;
                    $scope.hv_avg_annual_asset_loss_per_year = $scope.hv_total_asset_value * ($scope.hv_per_avg_asset_loss_per_year / 100);
                    $scope.hv_avg_annual_asset_loss_per_year_1_per = ($scope.hv_avg_annual_asset_loss_per_year * 0.01);
                    $scope.AnnualLostAssetReplacement();
                    $scope.CostReductionMinDeliveryValue();
                };
                $scope.AssetLossReduction = function () {
                    $scope.lr_total_asset_value = $scope.lr_total_asset * $scope.lr_avg_asset_cost;
                    $scope.lr_avg_annual_asset_loss_per_year = $scope.lr_total_asset_value * ($scope.lr_per_avg_asset_loss_per_year / 100);
                    $scope.lr_avg_annual_asset_loss_per_year_1_per = ($scope.lr_avg_annual_asset_loss_per_year * 0.01);
                    $scope.AnnualLostAssetReplacement();
                    $scope.CostReductionMinDeliveryValue();
                };
                $scope.SearchTimeLossProfile = function () {
                    $scope.stlp_hrs_wasted_daily = $scope.stlp_daily_time_spent_hrs * $scope.stlp_total_emp;
                    $scope.stlp_hrs_wasted_annually = $scope.stlp_hrs_wasted_daily * 365;
                    $scope.stlp_annual_productivity_lost = $scope.stlp_hrs_wasted_annually * $scope.stlp_emp_avg_hourly_rate;
                    $scope.CostReductionMinDeliveryValue();
                };

                $scope.AssetUtilization = function () {
                    $scope.au_daily_asset_value = $scope.au_total_asset * $scope.au_asset_revenue_day;
                    $scope.au_daily_asset_revenue_day = $scope.au_daily_asset_value * ($scope.au_per_avg_asset_utilization_year / 100);
                    $scope.au_daily_asset_revenue_year = $scope.au_daily_asset_revenue_day * 365;
                    $scope.au_daily_asset_revenue_year_1_per = $scope.au_daily_asset_revenue_year * 0.01;
                    $scope.AnnualLostAssetRevenueLoss();
                    $scope.CostReductionMinDeliveryValue();

                };

                $scope.AnnualLostAssetReplacement = function () {
                    $scope.alar_total_lost_asset_value = $scope.hv_avg_annual_asset_loss_per_year + $scope.lr_avg_annual_asset_loss_per_year;
                    $scope.alar_total_lost_asset = ($scope.hv_total_asset + $scope.lr_total_asset) * 0.02;
                    $scope.alar_avg_lost_value = $scope.alar_total_lost_asset_value / $scope.alar_total_lost_asset;
                    $scope.alar_replacement_cost_year = $scope.alar_total_lost_asset_value * ($scope.alar_avg_repurchase_year / 100);
                    $scope.AnnualLostAssetRevenueLoss();
                    $scope.CostReductionMinDeliveryValue();
                };

                $scope.AnnualLostAssetRevenueLoss = function () {
                    $scope.alarl_asset_revenue = $scope.au_asset_revenue_day;
                    $scope.alarl_total_asset = $scope.alar_total_lost_asset;
                    $scope.alarl_total_asset_value = $scope.alarl_total_asset * $scope.alarl_asset_revenue;
                    $scope.alarl_asset_revenue_day = $scope.alarl_total_asset_value * ($scope.alarl_avg_utilization_year / 100);
                    $scope.alarl_asset_revenue_loss_year = $scope.alarl_asset_revenue_day * 365;
                    $scope.CostReductionMinDeliveryValue();
                };

                $scope.CostReductionMinDeliveryValue = function () {
                    $scope.hv_loss_reduction = $scope.hv_avg_annual_asset_loss_per_year;
                    $scope.avg_asset_loss_reduction = $scope.lr_avg_annual_asset_loss_per_year;
                    $scope.avg_replacement_lost_asset = $scope.alar_replacement_cost_year;
                    $scope.reduction_staff_search_time = (0.5 * $scope.stlp_hrs_wasted_annually * 30);
                    $scope.increase_asset_utilization = $scope.au_daily_asset_revenue_year;
                    $scope.decrease_lost_asset_revenue = $scope.alarl_asset_revenue_loss_year;
                    $scope.cost_reduction_value_year = $scope.hv_loss_reduction + $scope.avg_asset_loss_reduction + $scope.avg_replacement_lost_asset + $scope.reduction_staff_search_time + $scope.increase_asset_utilization + $scope.decrease_lost_asset_revenue;
                    $scope.cost_reduction_value_3_year = $scope.cost_reduction_value_year * 3;
                    $scope.cost_reduction_value_5_year = $scope.cost_reduction_value_year * 5;
                };


            });
        </script>
    </head>
    <body>
        <?php
        error_reporting(0);
        include './blog/includes/database.php';
        $msg = '';
        if (isset($_POST['roi_submit'])) {
            unset($_POST['roi_submit']);

            foreach ($_POST as $key => $val) {
                $_POST[$key] = mysqli_real_escape_string($connection, $_POST[$key]);
            }
            $_POST['hv_total_asset_value'] = $_POST['hv_total_asset'] * $_POST['hv_asset_avg_cost'];
            $_POST['hv_avg_annual_asset_loss_per_year'] = round($_POST['hv_total_asset_value'] * ($_POST['hv_per_avg_asset_loss_per_year'] / 100), 2);
            $_POST['hv_avg_annual_asset_loss_per_year_1_per'] = round( ($_POST['hv_avg_annual_asset_loss_per_year'] * 0.01), 2);

            $_POST['lr_total_asset_value'] = $_POST['lr_total_asset'] * $_POST['lr_avg_asset_cost'];
            $_POST['lr_avg_annual_asset_loss_per_year'] = round($_POST['lr_total_asset_value'] * ($_POST['lr_per_avg_asset_loss_per_year'] / 100), 2);
            $_POST['lr_avg_annual_asset_loss_per_year_1_per'] = round( ($_POST['lr_avg_annual_asset_loss_per_year'] * 0.01), 2);

            $_POST['stlp_hrs_wasted_daily'] = $_POST['stlp_daily_time_spent_hrs'] * $_POST['stlp_total_emp'];
            $_POST['stlp_hrs_wasted_annually'] = $_POST['stlp_hrs_wasted_daily'] * 365;
            $_POST['stlp_annual_productivity_lost'] = $_POST['stlp_hrs_wasted_annually'] * $_POST['stlp_emp_avg_hourly_rate'];

            $_POST['au_daily_asset_value'] = $_POST['au_total_asset'] * $_POST['au_asset_revenue_day'];
            $_POST['au_daily_asset_revenue_day'] = round((($_POST['au_per_avg_asset_utilization_year'] / 100) * $_POST['au_daily_asset_value']), 2);
            $_POST['au_daily_asset_revenue_year'] = round($_POST['au_daily_asset_revenue_day'] * 365, 2);
            $_POST['au_daily_asset_revenue_year_1_per'] = round(($_POST['au_daily_asset_revenue_year'] * 0.01), 2);

            $_POST['alar_total_lost_asset_value'] = $_POST['hv_avg_annual_asset_loss_per_year'] + $_POST['lr_avg_annual_asset_loss_per_year'];
            $_POST['alar_total_lost_asset'] = round((($_POST['hv_total_asset'] + $_POST['lr_total_asset']) * 0.02), 2);
            $_POST['alar_avg_lost_value'] = round(($_POST['alar_total_lost_asset_value'] / $_POST['alar_total_lost_asset']), 2);
            $_POST['alar_replacement_cost_year'] = round(($_POST['alar_total_lost_asset_value'] * ($_POST['alar_avg_repurchase_year'] / 100)), 2);


            $_POST['alarl_asset_revenue'] = $_POST['au_asset_revenue_day'];
            $_POST['alarl_total_asset'] = $_POST['alar_total_lost_asset'];
            $_POST['alarl_total_asset_value'] = round(($_POST['alarl_total_asset'] * $_POST['alarl_asset_revenue']), 2);
            $_POST['alarl_asset_revenue_day'] = round(($_POST['alarl_total_asset_value'] * ($_POST['alarl_avg_utilization_year'] / 100)), 2);
            $_POST['alarl_asset_revenue_loss_year'] = round($_POST['alarl_asset_revenue_day'] * 365, 2);


            $_POST['hv_loss_reduction'] = $_POST['hv_avg_annual_asset_loss_per_year'];
            $_POST['avg_asset_loss_reduction'] = $_POST['lr_avg_annual_asset_loss_per_year'];
            $_POST['avg_replacement_lost_asset'] = $_POST['alar_replacement_cost_year'];
            $_POST['reduction_staff_search_time'] = round((0.5 * $_POST['stlp_hrs_wasted_annually'] * 30), 2);
            $_POST['increase_asset_utilization'] = $_POST['au_daily_asset_revenue_year'];
            $_POST['decrease_lost_asset_revenue'] = $_POST['alarl_asset_revenue_loss_year'];
            $_POST['cost_reduction_value_year'] = round(($_POST['hv_loss_reduction'] + $_POST['avg_asset_loss_reduction'] + $_POST['avg_replacement_lost_asset'] + $_POST['reduction_staff_search_time'] + $_POST['increase_asset_utilization'] + $_POST['decrease_lost_asset_revenue']), 2);
            $_POST['cost_reduction_value_3_year'] = round($_POST['cost_reduction_value_year'] * 3, 2);
            $_POST['cost_reduction_value_5_year'] = round($_POST['cost_reduction_value_year'] * 5, 2);




            $array_keys = array_keys($_POST);
            $array_values = array_values($_POST);

            $query = "INSERT INTO `roi`(`" . implode("`, `", $array_keys) . "`) VALUES ('" . implode("', '", $array_values) . "')";
            $add_roi = mysqli_query($connection, $query);
            if ($add_roi) {
                $full_name = mysqli_real_escape_string($connection, $_POST['first_name']);
                $roi_id = mysqli_insert_id($connection);
                $msg = '<div class="alert alert-success">
				<strong>Thank you!</strong> One of our team Members will Contact you Shortly.</div>';

// Generate PDF
                $filename = preg_replace("![^a-z0-9]+!i", "_", $full_name) . "_" . time() . $roi_id . ".pdf";
                $url = "https://www.pycube.com/roi_generate_pdf.php?id=" . $roi_id . "&filename=" . base64_encode($filename);
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($curl);
                curl_close($curl);

                // Send mail start
                include_once './includes/mailer.php';
                
                $url = 'https://www.pycube.com/show_file.php?' . base64_encode(base64_encode("path=roi"  . "&file=" . $filename));
                $message = $mail_head . '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr> 
				     <td><p>Dear ' . trim($full_name) . ',</p><p>Thank you for contacting with Pycube.</p><p>You have requested for Hospital ROI View w Utilization WVH DJ, please <a href="' . $url . '">click here</a> for more details.</p></td></tr></table>' . $mail_footer;
// Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
                $headers .= 'From: <sales@pycube.com>' . "\r\n";
                //$headers .= 'Cc: amanda.atrash@pycube.com' . "\r\n";
                //$headers .= 'Cc: phani.v@standav.com' . "\r\n";
                $mailto = mysqli_real_escape_string($connection, $_POST['email']);
                mail($mailto, "Hospital ROI View w Utilization WVH DJ", $message, $headers);
// Send mail end
            } else {
                $msg = '<div class="alert alert-info">
				<strong>Info!</strong> Something went wrong.  Please try again.
				</div>';
            }
        }
        ?>
        <!-- Header Start -->
        <div class="mp-pusher" id="mp-pusher">
            <header class="bg_header">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col col-md-3 logo"> <a href="/">  <img src="img/logo.png" alt="Py Cube Asset Management"/>  </a>  </div>
                        <div class="col col-md-9 float-right right-nav text-right md-show"> 



                        </div> 
                    </div>	 
                </div>
            </header>

            <!-- Header End -->
            <div class="container-fluid" style="margin-top:105px;"  ng-app="myApp" ng-controller="myCtrl">
                <?php if ($msg != '') { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $msg; ?>
                        </div>
                    </div>
                <?php } ?>
                <form action="" name="roi_form" id="roi_form" method="post"  class="form-horizontal">
                    <div class="first_fom">
                        <div class="row m-0">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="first_name" class="col-form-label">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required="" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="company_name" class="col-form-label">Company<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" required="" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required="" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="phone_num" class="col-form-label">Phone number<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone_num" name="phone_num" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row  main_form">
                        <div class="col-md-12">
                            <div class="row row-eq-height">
                                <div class="col-md-4 same_box">
                                    <ul class="price">
                                        <li class="header2"> High Value Asset Loss Reduction*
                                        </li>
                                        <li class="grey">Average High Value (HV) Asset Value (eg: Infusion Pumps)	
                                        </li>
                                        <li  class=""> 
                                            <div class="form-group m-0 row">
                                                <label for="hv_asset_avg_cost" class="col-sm-6 col-form-label">
                                                    Average Cost of an HV Asset($)<span class="text-danger">*</span></label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" placeholder="$.0.00" name="hv_asset_avg_cost" id="hv_asset_avg_cost" required="true" ng-model="hv_asset_avg_cost" ng-change="HVAssetLossReduction()"/> </div>
                                            </div>                                
                                        </li>
                                        <li  class="">
                                            <div class="form-group m-0 row"> 
                                                <label for="hv_total_asset" class="col-sm-6 col-form-label">Total No. of Assets<span class="text-danger">*</span></label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" required="true" name="hv_total_asset" id="hv_total_asset" ng-model="hv_total_asset"  ng-change="HVAssetLossReduction()"/> </div> 
                                            </div>
                                        </li>                                        
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="hv_total_asset_value" class="col-sm-6 col-form-label"> Total asset value($)</label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="hv_total_asset_value" id="hv_total_asset_value" ng-model="hv_total_asset_value" placeholder="$.0.00"  disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="hv_per_avg_asset_loss_per_year" class="col-sm-6 col-form-label">% Average Asset Loss Per Year<span class="text-danger">*</span></label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="hv_per_avg_asset_loss_per_year" id="hv_per_avg_asset_loss_per_year" ng-model="hv_per_avg_asset_loss_per_year" required="true"   ng-change="HVAssetLossReduction()"/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="hv_avg_annual_asset_loss_per_year" class="col-sm-6 col-form-label"> Average Annual Asset Loss Per Year($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="hv_avg_annual_asset_loss_per_year" id="hv_avg_annual_asset_loss_per_year" ng-model="hv_avg_annual_asset_loss_per_year" placeholder="$.0.00" disabled/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="hv_avg_annual_asset_loss_per_year_1_per" class="col-sm-6 col-form-label"> 1% of Annual Asset Loss Per Year($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="hv_avg_annual_asset_loss_per_year_1_per" id="hv_avg_annual_asset_loss_per_year_1_per" ng-model="hv_avg_annual_asset_loss_per_year_1_per" placeholder="$.0.00" disabled/> </div> 
                                            </div>
                                        </li>
                                        <li><p>* Based on available Market Data Ave. Loss is 10-30%</p></li>

                                    </ul>
                                </div>

                                <div class="col-md-4 same_box">
                                    <ul class="price">
                                        <li class="header2" >Total Asset Loss Reduction**
                                        </li>
                                        <li class="grey">Average Total Asset Value (eg: monitors, telemetry)	
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="lr_avg_asset_cost" class="col-sm-6 col-form-label"> Average Cost of an Asset($)<span class="text-danger">*</span> </label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" placeholder="$.0.00" name="lr_avg_asset_cost" id="lr_avg_asset_cost" ng-model="lr_avg_asset_cost" ng-change="AssetLossReduction()" required="true" /> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="lr_total_asset" class="col-sm-6 col-form-label"> Total No. of Assets<span class="text-danger">*</span> </label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" required="true" name="lr_total_asset" id="lr_total_asset" ng-model="lr_total_asset" ng-change="AssetLossReduction()" /> </div> 
                                            </div>
                                        </li>

                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="lr_total_asset_value" class="col-sm-6 col-form-label">Total asset value($)</label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="lr_total_asset_value" id="lr_total_asset_value" ng-model="lr_total_asset_value" placeholder="$.0.00"  disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="lr_per_avg_asset_loss_per_year" class="col-sm-6 col-form-label"> % Average Asset Loss Per Year<span class="text-danger">*</span></label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" required="true" name="lr_per_avg_asset_loss_per_year" id="lr_per_avg_asset_loss_per_year" ng-model="lr_per_avg_asset_loss_per_year" ng-change="AssetLossReduction()" /> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="lr_avg_annual_asset_loss_per_year" class="col-sm-6 col-form-label"> Average Annual Asset Loss Per Year($) </label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="lr_avg_annual_asset_loss_per_year" id="lr_avg_annual_asset_loss_per_year" ng-model="lr_avg_annual_asset_loss_per_year" placeholder="$.0.00"  disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="lr_avg_annual_asset_loss_per_year_1_per" class="col-sm-6 col-form-label"> 1% Annual Asset Loss Per Year($) </label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="lr_avg_annual_asset_loss_per_year_1_per" id="lr_avg_annual_asset_loss_per_year_1_per" ng-model="lr_avg_annual_asset_loss_per_year_1_per" placeholder="$.0.00"  disabled />  </div> 
                                            </div>
                                        </li>
                                        <li><p>** Based on available Market Data Ave. Loss is 10-30%</p></li>                        


                                    </ul>
                                </div>

                                <div class="col-md-4 same_box">
                                    <ul class="price">
                                        <li class="header2">Search Time Loss Profile </li>
                                        <li class="grey">Search Time Loss Projections by staff	
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="stlp_emp_avg_hourly_rate" class="col-sm-6 col-form-label"> Enter Nurse / Staff  Ave. hourly rate($)<span class="text-danger">*</span></label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" placeholder="$.0.00" name="stlp_emp_avg_hourly_rate" ng-model="stlp_emp_avg_hourly_rate" id="stlp_emp_avg_hourly_rate" required="true" ng-change="SearchTimeLossProfile()" /> </div> 
                                            </div>
                                        </li> 
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="stlp_total_emp" class="col-sm-6 col-form-label"> No. of Active RN / Floor Staff Daily across 24hrs / 3 Shifts<span class="text-danger">*</span> </label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" placeholder="" name="stlp_total_emp" id="stlp_total_emp" ng-model="stlp_total_emp" required="true" ng-change="SearchTimeLossProfile()" /> </div> 
                                            </div>
                                        </li>  

                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="stlp_daily_time_spent_hrs" class="col-sm-6 col-form-label">Daily Time Spent Search in Hrs.<span class="text-danger">*</span></label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="stlp_daily_time_spent_hrs" id="stlp_daily_time_spent_hrs" ng-model="stlp_daily_time_spent_hrs" required="true" ng-change="SearchTimeLossProfile()" /> </div> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group m-0 row"> 
                                                <label for="stlp_hrs_wasted_daily" class="col-sm-6 col-form-label"> Hours Wasted Daily</label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="stlp_hrs_wasted_daily" id="stlp_hrs_wasted_daily" ng-model="stlp_hrs_wasted_daily" disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="stlp_hrs_wasted_annually" class="col-sm-6 col-form-label">Hours Wasted Annually</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="stlp_hrs_wasted_annually" id="stlp_hrs_wasted_annually" ng-model="stlp_hrs_wasted_annually" disabled /> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="stlp_annual_productivity_lost" class="col-sm-6 col-form-label">Annual Productivity lost at Hourly Rate($)</label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="stlp_annual_productivity_lost" id="stlp_annual_productivity_lost" ng-model="stlp_annual_productivity_lost" placeholder="$.0.00" disabled /> </div> 
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="row row-eq-height">
                                <div class="col-md-4 same_box">
                                    <ul class="price">
                                        <li class="header2">Asset Utilization  </li>
                                        <li class="grey">Asset Utilization and Revenue Value 
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="au_asset_revenue_day" class="col-sm-6 col-form-label">Asset Revenue / Day($)<span class="text-danger">*</span></label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="au_asset_revenue_day" id="au_asset_revenue_day" ng-model="au_asset_revenue_day" placeholder="$.0.00" required="true" ng-change="AssetUtilization()" /> </div> 
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="au_total_asset" class="col-sm-6 col-form-label">Total No. of Tracked Assets<span class="text-danger">*</span></label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="au_total_asset" id="au_total_asset" required="true" ng-model="au_total_asset" ng-change="AssetUtilization()"/> </div> 
                                            </div>
                                        </li>

                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="au_daily_asset_value" class="col-sm-6 col-form-label">Daily asset value($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="au_daily_asset_value" id="au_daily_asset_value" ng-model="au_daily_asset_value" placeholder="$.0.00" disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="au_per_avg_asset_utilization_year" class="col-sm-6 col-form-label">% Average Asset Utilization / Yr.<span class="text-danger">*</span></label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="au_per_avg_asset_utilization_year" id="au_per_avg_asset_utilization_year" ng-model="au_per_avg_asset_utilization_year" required="true"  ng-change="AssetUtilization()"/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="au_daily_asset_revenue_day" class="col-sm-6 col-form-label">Daily Asset Revenue Per Day($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="au_daily_asset_revenue_day" id="au_daily_asset_revenue_day" ng-model="au_daily_asset_revenue_day" placeholder="$.0.00" disabled /> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="au_daily_asset_revenue_year" class="col-sm-6 col-form-label">Daily Asset Revenue Per Year($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="au_daily_asset_revenue_year" id="au_daily_asset_revenue_year" ng-model="au_daily_asset_revenue_year" placeholder="$.0.00" disabled /> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="au_daily_asset_revenue_year_1_per" class="col-sm-6 col-form-label">1% Daily Asset Revenue Per Year($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="au_daily_asset_revenue_year_1_per" id="au_daily_asset_revenue_year_1_per" ng-model="au_daily_asset_revenue_year_1_per" placeholder="$.0.00" disabled /> </div> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 same_box">
                                    <ul class="price">
                                        <li class="header2">Annual Lost Asset Replacement</li>
                                        <li class="grey">When an asset is lost, there is the lost value of that asset plus also the cost to replace those assets.</li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alar_total_lost_asset_value" class="col-sm-6 col-form-label">Total Lost  (5%) Asset Value($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" placeholder="$.0.00" name="alar_total_lost_asset_value" id="alar_total_lost_asset_value" ng-model="alar_total_lost_asset_value" disabled/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alar_total_lost_asset" class="col-sm-6 col-form-label">Total No. of Lost Assets</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alar_total_lost_asset" id="alar_total_lost_asset" ng-model="alar_total_lost_asset" disabled/> </div> 
                                            </div>
                                        </li>

                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alar_avg_lost_value" class="col-sm-6 col-form-label">Average Lost Asset value($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alar_avg_lost_value" id="alar_avg_lost_value" ng-model="alar_avg_lost_value" placeholder="$.0.00" disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alar_avg_repurchase_year" class="col-sm-6 col-form-label">Asset Repurchase Average Yr.<span class="text-danger">*</span></label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alar_avg_repurchase_year" id="alar_avg_repurchase_year" ng-model="alar_avg_repurchase_year" required="true" ng-change="AnnualLostAssetReplacement()" /> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alar_replacement_cost_year" class="col-sm-6 col-form-label">Replacement Cost Per Year($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alar_replacement_cost_year" id="alar_replacement_cost_year" ng-model="alar_replacement_cost_year" placeholder="$.0.00" disabled /> </div> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 same_box">
                                    <ul class="price">
                                        <li class="header2">Annual Lost Asset Revenue Loss</li>
                                        <li class="grey">Hospitals Lost Assets are incapable of generating service or revenue. The result is that lost assets drive down</li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alarl_asset_revenue" class="col-sm-6 col-form-label">Daily Asset Revenue / Day.($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alarl_asset_revenue" id="alarl_asset_revenue" ng-model="alarl_asset_revenue" placeholder="$.0.00" disabled/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alarl_total_asset" class="col-sm-6 col-form-label">Total No. of Lost Tracked Assets</label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" placeholder="" name="alarl_total_asset" id="alarl_total_asset" ng-model="alarl_total_asset" disabled/> </div> 
                                            </div>
                                        </li>


                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alarl_total_asset_value" class="col-sm-6 col-form-label">Daily Lost asset value($)  </label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alarl_total_asset_value" id="alarl_total_asset_value" ng-model="alarl_total_asset_value" placeholder="$.0.00"  disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alarl_avg_utilization_year" class="col-sm-6 col-form-label">% Average Asset Utilization / Yr.<span class="text-danger">*</span></label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alarl_avg_utilization_year" id="alarl_avg_utilization_year" ng-model="alarl_avg_utilization_year" required="true" ng-change="AnnualLostAssetRevenueLoss()"/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alarl_asset_revenue_day" class="col-sm-6 col-form-label">Daily Asset Revenue Per Day($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alarl_asset_revenue_day" id="alarl_asset_revenue_day" ng-model="alarl_asset_revenue_day" placeholder="$.0.00" disabled /> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="alarl_asset_revenue_loss_year" class="col-sm-6 col-form-label">Daily Asset Revenue Loss Per Year($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="alarl_asset_revenue_loss_year" id="alarl_asset_revenue_loss_year" ng-model="alarl_asset_revenue_loss_year" placeholder="$.0.00" disabled /> </div> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                 <div class="row">
                                <div class="col-md-12 p-0">
                                    <ul class="price">
                                        <li class="header" >Pycube Annualized ROI & TCO Cost Reduction Minimum Delivery Value
                                        </li>

                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="hv_loss_reduction" class="col-sm-6 col-form-label">1% High Value Loss Reduction($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="hv_loss_reduction" id="hv_loss_reduction" placeholder="" ng-model="hv_loss_reduction" disabled/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="avg_asset_loss_reduction" class="col-sm-6 col-form-label">1% Average Asset Loss Reduction($)</label> 
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="avg_asset_loss_reduction" id="avg_asset_loss_reduction" ng-model="avg_asset_loss_reduction" disabled/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="avg_replacement_lost_asset" class="col-sm-6 col-form-label">10% Average Replacement of Lost Assets($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="avg_replacement_lost_asset" id="avg_replacement_lost_asset" ng-model="avg_replacement_lost_asset" disabled/> </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="reduction_staff_search_time" class="col-sm-6 col-form-label">50%  min Reduction in Staff Search Time($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="reduction_staff_search_time" id="reduction_staff_search_time" ng-model="reduction_staff_search_time" disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="increase_asset_utilization" class="col-sm-6 col-form-label">1% increase in asset utilization($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="increase_asset_utilization" id="increase_asset_utilization" ng-model="increase_asset_utilization"  disabled />  </div> 
                                            </div>
                                        </li>

                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="decrease_lost_asset_revenue" class="col-sm-6 col-form-label">1% decrease of Lost Asset Revenue($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="decrease_lost_asset_revenue" id="decrease_lost_asset_revenue" ng-model="decrease_lost_asset_revenue" disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="cost_reduction_value_year" class="col-sm-6 col-form-label">Annual minimum Op cost reduction value($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="cost_reduction_value_year" id="cost_reduction_value_year" ng-model="cost_reduction_value_year" disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="cost_reduction_value_3_year" class="col-sm-6 col-form-label">3 Yr. Annual minimum Op cost reduction value($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="cost_reduction_value_3_year" id="cost_reduction_value_3_year" ng-model="cost_reduction_value_3_year"  disabled />  </div> 
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="form-group m-0 row">
                                                <label for="cost_reduction_value_5_year" class="col-sm-6 col-form-label">5 Yr. Annual minimum Op cost reduction value($)</label>
                                                <div class="col-sm-6 sub-input"> <input class="form-control" type="number" name="cost_reduction_value_5_year" id="cost_reduction_value_5_year" ng-model="cost_reduction_value_5_year" disabled />  </div> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div> 



                    </div>
                    <div class="row m-0">
                        <div class="col-sm-4 sub-text pull-right " style="padding-bottom:10px;"></div>
                        <div class="col-sm-2 sub-text pull-left " style="padding-bottom:10px;">
                            <button type="reset" name="roi_submit" class="btn btn-block  btn-default btn-secondary">Reset</button>
                        </div>
                        <div class="col-sm-2 sub-text pull-right " style="padding-bottom:10px;">
                            <button type="submit" name="roi_submit" class="btn btn-block btn-default btn-primary">Submit</button>
                        </div>
                        <div class="col-sm-4 sub-text pull-right " style="padding-bottom:10px;"></div>
                    </div>



                </form>






            </div>



        </div>
    </body>
</html>
