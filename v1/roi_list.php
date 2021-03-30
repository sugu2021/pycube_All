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

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


        <style>
            th { font-size: 15px; }
            td { font-size: 13px; }

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
        </style>
        <script>
            $(document).ready(function () {
                $('#table_id').DataTable();
            });
        </script>

    </head>
    <body>
        <?php
        error_reporting(0);
        include './blog/includes/database.php';
        $msg = '';
        $query = mysqli_query($connection, "SELECT * FROM roi order by roi_id desc");
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

                <form action="" name="roi_form" id="roi_form" method="post"  class="form-horizontal">
                    <div class="first_fom">
                        <div class="row m-0">

                            <div class="col-sm-12">
                                <table id="table_id" class="display">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>1% High Value Loss Reduction</th> 
                                            <th>1% Average Asset Loss Reduction </th>	
                                            <th>10% Average Replacement of Lost Assets</th>	
                                            <th>50%  min Reduction in Staff Search Time	</th>
                                            <th>1% increase in asset utilization	</th>
                                            <th>1% decrease of Lost Asset Revenue 	</th>
                                            <th>Annual minimum Op cost reduction value	</th>
                                            <th>3 Yr. Annual minimum Op cost reduction value</th>	
                                            <th>5 Yr. Annual minimum Op cost reduction value	</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_array($query)) { ?>
                                            <tr>
                                                <td>
                                                    <p><strong><?php echo $row['first_name']; ?></strong></p>
                                                    <p><small><?php echo $row['company_name']; ?></small></p>
                                                    <p><?php echo $row['email']; ?></p>
                                                    <p><?php echo $row['phone_num']; ?></p>
                                                </td>
                                                <td><?php echo $row['hv_loss_reduction']; ?></td>
                                                <td><?php echo $row['avg_asset_loss_reduction']; ?></td>
                                                <td><?php echo $row['avg_replacement_lost_asset']; ?></td>
                                                <td><?php echo $row['reduction_staff_search_time']; ?></td>
                                                <td><?php echo $row['increase_asset_utilization']; ?></td>
                                                <td><?php echo $row['decrease_lost_asset_revenue']; ?></td>
                                                <td><?php echo $row['cost_reduction_value_year']; ?></td>
                                                <td><?php echo $row['cost_reduction_value_3_year']; ?></td>
                                                <td><?php echo $row['cost_reduction_value_5_year']; ?></td>
                                                <td><a href="roi_update.php?id=<?php echo $row['roi_id'] ?>">View</a></td>

                                            </tr>					 
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>






                </form>






            </div>
        </div>
    </body>
</html>
