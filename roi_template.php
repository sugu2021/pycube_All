<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: .5px solid #929292;
                border-collapse: collapse;
                font-family: sans-serif;
            }
            th, td {
                padding: 5px;
                text-align: left;    
            }
            table{
                color: #222222;
                font-size: 14px;
            }
            th{
                font-weight: 400;
            }
            td{
                vertical-align: top;
            }
            .border-none, .border-none th, .border-none td{}
            .header2{
                color: #00aee7;
                font-size: 13px;
            }
            .header3{
                color: #014861;
                font-size: 11px;
            }
            .header4{
                font-size: 10px;
                color: #212529;
            }
            .border_none_table, .border_none_tr , .header2, .header3, .header4{
                border: none;
            }
            .fon11{
                font-size: 11px;
                color: #333333;
            }
			.width-50{
				width:50%;
			}
        </style>
    </head>
    <body>

        <table align="center" style="width:100%;margin-bottom: 10px;border: none;">
            <tr style="border: none;">
                <td align="center" style="border: none;">
                    <div><img src="https://www.pycube.com/img/pycube.jpg"></div></td>
            </tr>
        </table>
        <h3 align="center" style="font-family: sans-serif;">Hospital ROI view utilization</h3>


        <?php
        error_reporting(0);
        include './blog/includes/database.php';
        $msg = '';
        $id = isset($_GET['id']) ? $_GET['id'] : 0;

        $query = mysqli_query($connection, "SELECT * FROM roi WHERE roi_id = $id");
        ?>
        <?php while ($row = mysqli_fetch_array($query)) { ?>

        <table style="width:100%;margin-bottom: 10px;">
            <tr>
                <th style="width: 50%;">Name</th>
                <td><?php echo $row['first_name']; ?></td>
            </tr>
            <tr>
                <th style="width: 50%;">Company</th>
                <td><?php echo $row['company_name']; ?></td>
            </tr>
            <tr>
                <th style="width: 50%;">Email</th>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <th style="width: 50%;">Phone number</th>
                <td><?php echo $row['phone_num']; ?></td>
            </tr>
        </table>



        <table  style="width:100%;margin-bottom: 10px;">
            <tr>
                <td class="width-50">
                    <table class="border_none_table" style="width:100%">
                        <tr class="border_none_tr">
                            <td colspan="2" class="header2">High Value Asset Loss Reduction</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header3">Average High Value (HV) Asset Value (eg: Infusion Pumps)</td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Average Cost of an HV Asset($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['hv_asset_avg_cost']); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total No. of HV Assets</td>
                            <td class="fon11 width-50"><?php echo number_format($row['hv_total_asset']); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total asset value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['hv_total_asset_value'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">% Average Asset Loss Per Year</td>
                            <td class="fon11 width-50"><?php echo number_format($row['hv_per_avg_asset_loss_per_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Average Annual Asset Loss Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['hv_avg_annual_asset_loss_per_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">1% of Annual Asset Loss Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['hv_avg_annual_asset_loss_per_year_1_per'], 2); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header4">* Based on available Market Data Ave. Loss is 10-30%</td>
                        </tr>
                    </table>
                </td>
                <td  class="width-50">
                    <table class="border_none_table" style="width:100%">
                        <tr class="border_none_tr">
                            <td colspan="2" class="header2">Average Asset Loss Reduction</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header3">Average Total Asset Value (eg: monitors, telemetry)</td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Average Cost of an Asset($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['lr_avg_asset_cost'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total No. of Assets</td>
                            <td class="fon11 width-50"><?php echo number_format($row['lr_total_asset']); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total asset value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['lr_total_asset_value'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">% Average Asset Loss Per Year</td>
                            <td class="fon11 width-50"><?php echo number_format($row['lr_per_avg_asset_loss_per_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Average Annual Asset Loss Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['lr_avg_annual_asset_loss_per_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">1% of Annual Asset Loss Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['lr_avg_annual_asset_loss_per_year_1_per'], 2); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header4">** Based on available Market Data Ave. Loss is 10-30%</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table  style="width:100%;margin-bottom: 10px;">
            <tr>
                <td class="width-50">
                    <table class="border_none_table" style="width:100%">
                        <tr class="border_none_tr">
                            <td colspan="2" class="header2">Search Time Loss Profile Value</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header3">Search Time Loss Projections by staff</td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Enter Nurse / Staff Ave. hourly rate($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['stlp_emp_avg_hourly_rate'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">No. of Active RN / Floor Staff Daily across 24hrs / 3 Shifts</td>
                            <td class="fon11 width-50"><?php echo number_format($row['stlp_total_emp'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Daily Time Spent Search in Hrs.</td>
                            <td class="fon11 width-50"><?php echo number_format($row['stlp_daily_time_spent_hrs'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Hours Wasted Daily</td>
                            <td class="fon11 width-50"><?php echo number_format($row['stlp_hrs_wasted_daily'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Hours Wasted Annually</td>
                            <td class="fon11 width-50"><?php echo number_format($row['stlp_hrs_wasted_annually'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Annual Productivity lost at Hourly Rate($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['stlp_annual_productivity_lost'], 2); ?></td>
                        </tr>
                    </table>
                </td>
                <td class="width-50">
                    <table class="border_none_table" style="width:100%">
                        <tr class="border_none_tr">
                            <td colspan="2" class="header2">Asset Utilization Impact Value</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header3">Asset Utilization and Revenue Value</td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Asset Revenue / Day($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['au_asset_revenue_day'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total No. of Tracked Assets</td>
                            <td class="fon11 width-50"><?php echo number_format($row['au_total_asset']); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Daily asset value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['au_daily_asset_value'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">% Average Asset Utilization / Yr.</td>
                            <td class="fon11 width-50"><?php echo number_format($row['au_per_avg_asset_utilization_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Daily Asset Revenue Per Day($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['au_daily_asset_revenue_day'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Daily Asset Revenue Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['au_daily_asset_revenue_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">1% Daily Asset Revenue Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['au_daily_asset_revenue_year_1_per'], 2); ?></td>
                        </tr>
                        
                    </table>
                </td>
            </tr>
        </table>

        <table  style="width:100%;margin-bottom: 10px;">
            <tr>
                <td class="width-50">
                    <table class="border_none_table" style="width:100%">
                        <tr class="border_none_tr">
                            <td colspan="2" class="header2">Annual Lost Asset Replacement Value</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header3">When an asset is lost, there is the lost value of that asset plus also the cost to replace those assets.</td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total Lost (5%) Asset Value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alar_total_lost_asset_value'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total No. of Lost Assets</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alar_total_lost_asset']); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Average Lost Asset value($)</td>
                            <td class="fon11 width-50"><?php echo $row['alar_avg_lost_value']; ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">% Asset Repurchase Average Yr.</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alar_avg_repurchase_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Replacement Cost Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alar_replacement_cost_year'], 2); ?></td>
                        </tr>
                    </table>
                </td>
                <td class="width-50">
                    <table class="border_none_table" style="width:100%">
                        <tr class="border_none_tr">
                            <td colspan="2" class="header2">Annual Lost Asset Revenue Loss</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="header3">Hospitals Lost Assets are incapable of generating service or revenue. The result is that lost assets drive down</td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Daily Asset Revenue / Day.($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alarl_asset_revenue'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Total No. of Lost Tracked Assets</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alarl_total_asset']); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Daily Lost asset value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alarl_total_asset_value'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">% Average Asset Utilization / Yr.</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alarl_avg_utilization_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Daily Asset Revenue Per Day($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alarl_asset_revenue_day'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Annual Asset Revenue Loss Per Year($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['alarl_asset_revenue_loss_year'], 2); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table  style="width:100%;margin-bottom: 10px;">
            <tr>
                <td>
                    <table class="border_none_table" style="width:100%">
                        <tr class="border_none_tr">
                            <td colspan="2" class="header2">Pycube Annualized ROI & TCO Cost Reduction Minimum Delivery Value</td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50"><strong>1% High Value Loss Reduction($)</strong></td>
                            <td class="fon11 width-50"><?php echo number_format($row['hv_loss_reduction'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">1% Average Asset Loss Reduction($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['avg_asset_loss_reduction'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">10% Average Replacement of Lost Assets($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['avg_replacement_lost_asset'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">50% min Reduction in Staff Search Time($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['reduction_staff_search_time'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">1% increase in asset utilization($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['increase_asset_utilization'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">1% decrease of Lost Asset Revenue($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['decrease_lost_asset_revenue'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">Annual minimum Op cost reduction value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['cost_reduction_value_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">3 Yr. Annual minimum Op cost reduction value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['cost_reduction_value_3_year'], 2); ?></td>
                        </tr>
                        <tr>
                            <td class="fon11 width-50">5 Yr. Annual minimum Op cost reduction value($)</td>
                            <td class="fon11 width-50"><?php echo number_format($row['cost_reduction_value_5_year'], 2); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <?php } ?>
    </body>
</html>
