<!DOCTYPE html>
<html>

<head>

<title>Royal Hotel</title>

<link href="css.css" rel="stylesheet" type="text/css" />

</head>


<body>

<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7E6D4">

  <tr>
    <td valign="top">

	<table width="780" border="2" cellspacing="0" cellpadding="0">
      	<tr>
        	<td width="360" height="86" align="right" valign="top" bgcolor="#996138" style="background-image:url(images/index_02.gif); background-repeat:repeat-x; background-position:top;"><a href="index.html"><img src="images/index_04.gif" alt="" width="304" height="80" border="0" /></a></td>
        	<td width="420" bgcolor="#996138" style="background-image:url(images/index_02.gif); background-repeat:repeat-x; background-position:top;"><div><a href="adminlogin.php"><button id="admin" style="background-color:marron;
		color:#D5A787;
		text-align:right;
		position:absolute;
		left:950px;font-family:Tahoma, Verdana;
	font-size:20px;">Admin</button></div></td>
      	</tr>

      	<tr>
        	<td colspan="2" valign="top">
		<table width="730" border="3" align="center" cellpadding="0" cellspacing="0">
          	<tr>
            		<td width="419" valign="top"><img src="images/index_20.gif" width="419" height="250" alt="" /></td>

            		<td  width="311" align="center" valign="top" bgcolor="#5C3317">

			<div style="padding-top:25px; padding-bottom:12px;"><img src="images/index_23.gif" width="253" height="29" alt="" /></div>
			<div style="padding-left:5px;">
				<form id="form1" name="form1" method="post" action="tariff-form.php" style="margin:auto;">
              			<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
                		<tr>
                  			<td width="40%" align="left" valign="top">Check-in Date</td>
                  			               		
        
                  			<td align="left" valign="top">
						<label>
                    				<?php
                  					echo "<select name='inday'>";

							for($i=01;$i<=31;$i++)
							{
								if($i==date("d"))  echo "<option value='$i' selected>$i</option>";
								else               	echo "<option value='$i'>$i</option>";
					
							}

                   					echo "</select>";
						?>
				   		&nbsp&nbsp
                				<?php
                  					echo "<select name='inmonth'>";

							for($i=01;$i<=12;$i++)
							{
								if($i==date("m")) echo "<option value='$i' selected>$i</option>";
				
								else              echo "<option value='$i'>$i</option>";
							}
			
                  					echo "</select>";
						?>
						&nbsp&nbsp
						<?php
							echo "<select name='inyear'>";

							for($i=2013;$i<=2020;$i++)
							{
								if($i==date("Y")) echo "<option value='$i' selected>$i</option>";
								else              echo "<option value='$i'>$i</option>";
			
							}
							echo "</select>";
						?>
                  				</label>
					</td>
				</tr>
				<tr> <td></td> <td></td></tr>
				<tr>
					<td width="40%" align="left" valign="top" class="body2">Check-out Date</td>
		
                 			<td align="left" valign="top">
						<label>
                    				<?php
							echo "<select name='outday'>";
	
		 					for($i=01;$i<=31;$i++)
		 					{

								if($i==date("d")) echo "<option value='$i' selected>$i</option>";
								else              echo "<option value='$i'>$i</option>";

							}
		
	    						echo "</select>";	
	
						?>
						&nbsp&nbsp
						<?php
	
							echo "<select name='outmonth'>";
		
							for($i=01;$i<=12;$i++)
							{
								if($i==date("m")) echo "<option value='$i' selected>$i</option>";
								else              echo "<option value='$i'>$i</option>";

							}
		
							echo "</select>";
						?>
						&nbsp&nbsp
						<?php
							echo "<select name='outyear'>";
							for($i=2013;$i<=2020;$i++)
							{
								if($i==date("Y"))  echo "<option value=$i selected>".$i."</option>";
								else               echo "<option value=$i>".$i."</option>";
			
							}
							echo "</select>";
						?>

                  				</label>
					</td>
                		</tr>

                		<tr>
                  			<td colspan="2" align="left" valign="top" style="padding-bottom:10px; padding-top:10px;">
				  		<table width="68%" border="0" cellspacing="0" cellpadding="0">
                    				<tr>
                      					
                      					<td width="60%" valign="top" class="body2">
								Number of rooms &nbsp&nbsp&nbsp&nbsp
							</td>
                    			
                      					
                      					<td><label>
                        					<?php
	
									echo "<select name='nor'>";
		
									for($i=01;$i<=20;$i++)
									{
										 echo "<option value='$i'>$i</option>";
									}
		
									echo "</select>";
								?>
                      					</label></td>
                    				</tr>
                 		 		</table>
					</td>
                  		</tr>
                		<tr> <td></td> <td></td></tr>
				<tr>
                  			<td colspan="2" valign="top"><label>
                  				<input type="image" name="imageField" src="images/index_27.gif" />
                  			</label></td>
               			 </tr>

             		</table>
             </form>
			
	</div>			
	</td>
     </tr>
          
    </table>
</td>
</tr>


<tr>
        <td colspan="2" valign="top">
		<table width="730" border="0" align="center" cellpadding="0" cellspacing="0" style="border-top:#FFFFFF 2px solid;">
          	<tr>
            		<td width="11" align="left" valign="top" bgcolor="#EABE94"><img src="images/index_31.gif" width="11" height="38" alt="" /></td>
            		<td width="708" bgcolor="#EABE94"><pre class="menu"><a href="index.php">Home</a>                  <a href="services.php">services</a>                  <a href="restaurant.php">Restaurant</a>                  <a href="booking.php">Booking</a>                  <a href="gallery.php">Gallery</a>                  <a href="feedback.php">feedback</a></pre></td>
            		<td width="11" align="right" valign="top" bgcolor="#EABE94"><img src="images/index_34.gif" width="11" height="38" alt="" /></td>
          	</tr>
        	</table>
	</td>
</tr>
</table>
</td>

</tr>


<tr>
    <td valign="top" style="padding-top:15px; padding-bottom:15px;">
	<table width="94%" height="14" border="0" align="center" cellpadding="0" cellspacing="0">
      		<tr>
        		<td width="67%" valign="top">
				<div style="padding-bottom:12px; padding-top:10px;">
					<img src="images/index_41.gif" width="335" height="25" alt="" />
				</div>

				<div style="padding-bottom:30px;">
				<table width="98%" border="0" cellspacing="0" cellpadding="0">
  				<tr>
  		  			<td width="25%" align="center" valign="top">
						<img src="images/index_46.gif" width="95" height="85" alt="" />
					</td>
		  			<td width="75%" valign="top" class="body">
						
						<p class="alt-top">Come alone or bring your family with you, stay here for a night or for weeks, 
						stay here while on business trip or at some kind of conference - either way our hotel is the best possible variant.</p> 
                  				Feel free to contact us anytime in case you have any questions or concerns.
					</td>
	  			</tr>
				</table>
				</div>	
				<div>
				<table width="98%" border="0" cellspacing="0" cellpadding="0">
		  			<tr>
						<td width="25%" align="left" valign="top">
							
							<img src="images/img6.jpg" width="190" height="145" alt="" />
						</td>
						
						<td width="75%" align="left" valign="top">
						<div class="body">
                        				<font face="Tahoma" size=5 color=#CB7C3D>&nbsp Special Offers</font>
                        				<p>&nbsp&nbsp&nbsp * FREE wide-screen TV</p>
                           				<p>&nbsp&nbsp&nbsp * 50% Discount for Restaraunt service</p>
                           				<p>&nbsp&nbsp&nbsp * 30% Discount for 3 days + orders</p>
                           				<p>&nbsp&nbsp&nbsp * FREE drinks and beverages in rooms</p>
                           				<p>&nbsp&nbsp&nbsp * Exclusive souvenirs</p>
                        			
						</div>
						</td>
		  			</tr>
				</table>
				</div>
			</td>

        		<td width="33%" valign="top" style="padding-left:15px;">
				<div><p><font face="Tahoma" size=5 color=#CB7C3D>Our Location</font></p></div>
				<div class="body1" style="padding:8px;">
					We are located in the center of Pune surrounded by malls and boutiques.<br />
					<br />
                        		Shivajinagar <br /><br />
                           		9075020009<br/>
                        		8888833514<br/>
					9765438042<br/>
                        		
				</div>
		  		<div style="text-align:center"><img src="images/img2.jpg" width="212" height="150" alt="" /></div>
			</td>
      		</tr>
    	</table>
</td>
</tr>
 


<tr>
        <td height="82" bgcolor="#AA6F47" style="background-image:url(images/index_61.gif); background-position:bottom; background-repeat:repeat-x;"><pre class="footer"><a href="index.php">Home</a>     ::     <a href="services.php">Services</a>     ::     <a href="restaurant.php">Restaurant</a>     ::     <a href="booking.php">Booking</a>     ::     <a href="gallery.php">Gallery</a>     ::     <a href="feedback.php">feedback</a><br /> </pre></td>
</tr>



</table>
</body>
</html>
