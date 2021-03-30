<?php
$mail_head = '<title>Pycube</title>
<body>

<table width="760"  cellspacing="0" cellpadding="0" align="center" border="0" bgcolor="#d6d3d3">
  <tr> 
       <td> 
         <table width="750" border="0" cellspacing="0" cellpadding="10" bgcolor="#ffffff" align="center" style="margin:5px;font-family:Arial, Helvetica, sans-serif;">
          <tr>
            <td colspan="2"  valign="top" align="left"> 
                <h2 style="margin:10px 10px 0px 10px;padding:0px 10px 10px 10px;border-bottom:1px solid #d6d3d3;">
                    <img src="https://www.pycube.com/img/logo.png" width="180" height="42" alt="logo"> 
                </h2>
              
            </td> 
           </tr>
           <tr> <td colspan="2" valign="top" style="padding-left:20px; font-size:12px;">';
?>
<?php
$mail_content = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
				   <tr> 
				     <td> 
  					      <p> <span style="font-weight:bold; padding-right:10px;"> Name: </span>FirstName LastName </p> 
						  <p> <span style="font-weight:bold; padding-right:10px;"> Email: </span>lakshmi@standav.com </p> 
						  <p> <span style="font-weight:bold; padding-right:10px;"> Phone Number: </span>8977948579 </p>
                          <p> <span style="font-weight:bold; padding-right:10px;"> Company: </span>Standav </p>	
                          <p> <span style="font-weight:bold; padding-right:10px;"> Title: </span> White Papers </p>
                          <p> <span style="font-weight:bold; padding-right:10px;"> Message: </span> Loreum ipsum </p>							  
					 
					 </td>
				   </tr>
				   
			     </table>';
?>

<?php 
$mail_footer = '</td> 
		   </tr>
          
            <tr> 
            <tr> 
              <td colspan="2"> <p style="border-top:1px solid #cacaca; padding:0px; margin:0px 10px;"> </p> </td> </tr>
               <td align="left" valign="middle" height="15" width="60%">  
                  <p style="background:url(icon_img.png) left center no-repeat;padding:4px 10px 0px 15px;margin:0px 0px 0px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"> VIRGINIA
| 21525 Ridgetop Circle | Suite 110 | Sterling | 20166. | <a href="tel:1-800-866-8583"> <i class="fa fa-phone" aria-hidden="true"></i> 1-800-866-8583  </a> </p>
                        
               </td>
                <td align="center" valign="middle" style="border-left:1px solid #cacaca;"> 
                <p style="padding:0px; margin:0px; color:#1295d2; font-style:italic; font-size:14px; font-weight:bold;"> <a href="http://www.pycube.com/" style="color:#1295d2;"> http://www.pycube.com/  </a> </p>
               
                </td>
            </tr>
          
            <tr> 
               <td align="left" valign="top" colspan="2">
               
               
               </td>
            
            </tr>
                
        
        </table>
</td>
  </tr>
</table>';
?>