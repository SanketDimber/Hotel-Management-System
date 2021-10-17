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
	<td>
	<div id="content">
      	<div class="gallery">
            <ul>
               <li><img alt="" src="images/2page-img1.jpg" /></li>
               <li><img alt="" src="images/2page-img2.jpg" /></li>
               <li><img alt="" src="images/2page-img3.jpg" /></li>
               <li><img alt="" src="images/2page-img4.jpg" /></li>
               <li><img alt="" src="images/2page-img5.jpg" /></li>
            </ul>
         </div></div>
	</td>
</tr>

<tr>
<td>

</td>
</tr>

<tr>
    <td valign="top" style="padding-top:15px; padding-bottom:15px;">
	 
		<table width="94%" height="14" border="0" align="center" cellpadding="0" cellspacing="0">
		
			<tr>
				<td colspan=2> <font color=#5C3317 size=5px><center><b>Thanks for interested in hotel royal.</b></center><br><br></font></td>
			</tr>


      			<tr>
        			<td width="67%" valign="top"> 
					 <font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> Reservation Details </b></font> <br/><br/>

					<?php

						include "connection.php";


						$rid=$_POST["rid"];
						$type=$_POST["type"];
						$nod=$_POST["nod"];
						$nor=$_POST["nor"];
						$total=$_POST["total"];
						$adv=$_POST["adv"];
						$cre=$_POST["credit"];
						$bal=$total-$adv;
						$name=$_POST["name"];
						$cvv=$_POST["cvv"];
						$fdate=$_POST["fdd"]."/".$_POST["fmm"]."/".$_POST["fyy"];
						$tdate=$_POST["tdd"]."/".$_POST["tmm"]."/".$_POST["tyy"];
						$bank=$_POST["bank"];
						
						if($bal<0) $bal=0;

						mysqli_query($con,"insert into payment values('".$rid."',".$nod.",'".$type."',".$total.",".$adv.",".$bal.",'".$cre."','".$name."',".$cvv.",'".$fdate."','".$tdate."','".$bank."')");
						
						$room=mysqli_query($con,"select * from room where type='".$type."'");

						$rom=mysqli_fetch_array($room);

						if($rom['avail_room'] >= $nor)
						{
							mysqli_query($con,"update room set reserv_room = reserv_room +".$nor.", avail_room=avail_room-".$nor." where type='".$type."'");
						}
						echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Payment is done sucessfully !! Please Check your reservation details.</font><br><br>";
				
						$rs=mysqli_query($con,"select * from reservation where res_id='".$rid."'");
						$row=mysqli_fetch_row($rs);

						echo"<form><table border=0 align=center cellpadding=5 cellspacing=5>";
							echo"<tr>";
								echo"<td align=left><font color=#5C3317>Reservation Id  :</font></td>";
								echo"<td > <input type=text  size=40 value=$rid readonly> </td>";
							echo"</tr>";

							echo"<tr>";
								echo"<td align=left><font color=#5C3317>Your Name  :</font></td>";
								echo"<td> <input type=text size=40 value=$name readonly> </td>";
							echo"</tr>";

							/*echo"<tr>";
								echo"<td align=left><font color=#5C3317>Check-in Date   :</font></td>";
								echo"<td><input type=text size=40 value=$fdate readonly></td>";
							echo"</tr>";
	
							echo"<tr>";
								echo"<td align=left><font color=#5C3317>Checkout Date  :</font></td>";
								echo"<td ><input type=text size=40 value=$row[2] readonly></td>";
							echo"</tr>";
*/
							echo"<tr>";
								echo"<td align=left><font color=#5C3317>Room type  :</font></td>";
								echo"<td ><input type=text size=40 value=$type readonly></td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td align=left><font color=#5C3317>Number of Rooms  :</font></td>";
								echo"<td ><input type=text size=40 value=$nor readonly></td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td align=left><font color=#5C3317>Total Payment  :</font></td>";
								echo"<td><input type=text size=40 value=$total readonly></td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td align=left><font color=#5C3317>Amount Paid  :</font></td>";
								echo"<td ><input type=text size=40 value=$adv readonly></td>";
							echo"</tr>";
							echo"<tr>";						
								echo"<td align=left><font color=#5C3317>Amount Remaining  :</font></td>";
								echo"<td><input type=text size=40 value=$bal readonly></td>";
							echo"</tr>";
						
					?> 
					</table>
					<!--<input type="submit" name=back value="LOG OUT">
					<?php
					if(isset($_POST['back']))	
						header("location:index.php");
					?>-->
					<a href="booking.php"><font color=#5C3317 size=2px><b>LOG OUT</b></a> 
					</form>
					
				</td>

        			<td width="33%" valign="top">

					<br><br><br><div style="text-align:center"><img src="images/img3.jpg" width="100%" height="160" alt="" /></div>
					
					<br><br><div style="text-align:center"><img src="images/img2.jpg" width="100%" height="160" alt="" /></div>
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

