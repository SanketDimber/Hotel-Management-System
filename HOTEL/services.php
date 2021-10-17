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

	<table width="780" border="0" cellspacing="0" cellpadding="0">
      	<tr>
        	<td width="360" height="86" align="right" valign="top" bgcolor="#996138" style="background-image:url(images/index_02.gif); background-repeat:repeat-x; background-position:top;"><a href="index.html"><img src="images/index_04.gif" alt="" width="304" height="80" border="0" /></a></td>
        	<td width="420" bgcolor="#996138" style="background-image:url(images/index_02.gif); background-repeat:repeat-x; background-position:top;">&nbsp;</td>
      	</tr>

      	<tr>
        	<td colspan="2" valign="top">
		<table width="730" border="0" align="center" cellpadding="0" cellspacing="0">
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
        		<td width="65%" valign="top" align=center>
				
				<div> <p> <font color=#CB7C3D size=5>We offer several kinds of rooms</font> </p> </div>
				<div>
					<table border=0 cellpadding=3 cellspacing=3 width=95%>
					
					<tr>
						<td><img alt="" src="images/Standard.jpg" width=150 height=125></td>
						<td><img alt="" src="images/suite.jpg" width=150 height=125></td>
						
					</tr>
					<tr>
						<td align=justify>
							<font color=#5C3317> <b>Standerd rooms</b> <br><br>
								Floor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                1-2<br>
								Rooms &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                       50<br>
								Bed   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      50<br>
								Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp           Rs.1000
				        	</td>
						
						
						<td>
							<font color=#5C3317> <b>Suite rooms </b> <br><br>
								Floor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                3-4<br>
								Rooms &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                       50<br>
								Bed   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      50<br>
								Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp           Rs.500
				        	</td>
					</tr>
					<tr>
						<td><br><img alt="" src="images/deluxe.jpg" width=150 height=125></td>
						<td><br><img alt="" src="images/super.jpg" width=150 height=125></td>
					</tr>
					<tr>
						<td>
							<font color=#5C3317> <b>Deluxe rooms</b> <br><br>
								Floor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                5-6<br>
								Rooms &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                       50<br>
								Bed   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      50<br>
								Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp           Rs.500
				        	</td>
						
						<td>
							<font color=#5C3317> <b>Super Deluxe rooms</b> <br><br>
								Floor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                7-8<br>
								Rooms &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                       50<br>
								Bed   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      50<br>
								Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp           Rs.500
				        	</td>
					</tr>

					</table>

				</div>
			</td>

        		<td width="35%" valign="top" style="padding-left:15px;">

				<div><p><font face="Tahoma" size=5 color=#CB7C3D>Other Services</font></p></div>

				<div class="body1" style="padding:8px;">
					In addition to housing we also offer<br />
					<br />
                        		<table border=0>
                        			<tr>
                              				<td><img alt="" src="images/2page-img7.jpg" width=90 ><br></td>
                              				<td><font color=#5C3317>Premium food (either at our restaraunt or delivered to your room)</font> </td>
                           			</tr>
                           			<tr>
                              				<td><img alt="" src="images/2page-img8.jpg" width=90> <br></td>
                              				<td><font color=#5C3317>Drinks and bevarages in your rooms </font></td>                   			
						</tr>
                           			<tr>
                              				<td> <img alt="" src="images/2page-img9.jpg" width=90 ><br> </td>
                              				<td> <font color=#5C3317> Daily cleaning (included into your package) </font></td>
                           			</tr>
                           			<tr>
                              				<td><img alt="" src="images/2page-img10.jpg" width=90> </td>
                              				<td><font color=#5C3317>Free access to our gym and swimming pool</font></td>
                           			</tr>
                        		</table>
                        		
				</div>
			</td>
      		</tr>
    	</table>
</td>
</tr>
 


<tr>
       <td height="82" bgcolor="#AA6F47" style="background-image:url(images/index_61.gif); background-position:bottom; background-repeat:repeat-x;"><pre class="footer"><a href="index.php">Home</a>     ::     <a href="services.php">Services</a>     ::     <a href="restaurant.php">Restaurant</a>     ::     <a href="booking.php">Booking</a>     ::     <a href="gallery.php">Gallery</a>     ::     <a href="feedback.php">feedback</a><br />  </pre></td>
</tr>



</table>
</body>
</html>               
