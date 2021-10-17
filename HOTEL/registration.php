<!DOCTYPE html>
<html>

<head>

<title>Royal Hotel</title>

<link href="css.css" rel="stylesheet" type="text/css" />

</head>

<script language="javascript">

	function chkfname()
	{
		var keypr = event.keyCode;
		if(keypr>=65&&keypr<=91|| keypr>=97&&keypr<=122 || keypr==8 ||keypr==32 || keypr==9 ||keypr==16 ||keypr==20)
		{
		}
		else
		{
			register.fname.value="";
			alert("Name does not contains number or special characters");
			register.fname.focus();
		}
	}
	
	function chklname()
	{
		var keypr = event.keyCode;
		if(keypr>=65&&keypr<=91||keypr>=97&&keypr<=122 || keypr==8 ||keypr==32 || keypr==9 ||keypr==16 ||keypr==20)
		{
		}
		else
		{
			register.lname.value="";
			alert("Name does not contains number or special characters");
			register.lname.focus();
		}
	}
	function chkday()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{
		}
		else
		{
			register.dd.value="";
			alert("day does not contains characters");
			register.dd.focus();
		}
	}
	
	function chkmonth()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{
		}
		else
		{
			alert("month does not contains characters");
			register.mm.value="";
			register.mm.focus();
		}
	}
	
	function chkyear()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{
		}
		else
		{
			register.yy.focus();
			register.yy.value="";
			alert("year does not contains characters");
			
		}
	}
	
	
	function chkphn()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{}
		else
		{
			register.phno.value="";
			alert("phone number does not contains characters");
			register.phno.focus();
		}
	}

	function chkpass()
	{
		if(register.pwd.value==register.cpwd.value)
		{}
		else
		{
			register.cpwd.value="";
			alert("Confirm Password is Incorrect");
			register.cpwd.focus();
		}
	}

	function check()
	{
		var fname= register.fname.value;
		var lname= register.lname.value;
		var mail= register.email.value;
		var dd= register.dd.value;
		var mm= register.mm.value;
		var yy= register.yy.value;
		var phno= register.phno.value;
		
		if(register.gender[0].checked==false && register.gender[1].checked==false)
		{
			alert("please select Your Gender !!");
		}
		if(register.gender[0].checked==true) register.gender1.value="Male";
		if(register.gender[1].checked==true) register.gender1.value="Female";

		var atp = mail.indexOf("@");
		
		var dotp = mail.lastIndexOf(".");
		
		if(atp<1 || (dotp-atp)<2)
		{
			alert("please Enter the correct Email ID");
			register.email.focus();
		}
	
		if(register.fname.value.length<1||register.lname.value.length<1||register.phno.value.length<1 ||register.uname.value.length<1 ||register.pwd.value.length<1 || register.cpwd.value.length<1)
		{
			alert("Empty form Fields !!");
		}

		if(register.agree.checked==false)
		{
			alert("please Check Agree !!");
		}

		if(dd>="1" && dd<="31" || mm>="1" && mm<="12" || yy>="1900" && yy<="2012")
		{}
		else
		{
				alert("please Enter the Day between 1 to 31, month between 1 to 12, year between 1900 to 2012");
				register.dd.value="";
				register.mm.value="";
				register.yy.value="";
				register.dd.focus();
		}

	}
	
	
	</script>
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
    <td valign="top" style="padding-top:15px; padding-bottom:15px;">
	 
		<table width="94%" height="14" border="0" align="center" cellpadding="0" cellspacing="0">
      		<tr>
        		<td width="60%" valign="top">               		
				
			<form name="register" method=post action=registration1.php>

			<table border=0 cellpadding=10 cellspacing=7 style="color:white">
			<tr> <td colspan=2> <font color=#5C3317>If You Would Like To become A Member Of Our Site Then Fill Out The Form Below. <br>
				<br><b>Register Now </font></td></tr>   
			<tr>
				<td> <font color=#5C3317>  First Name : </font> </td>
				<td> <input type="text" name="fname" size=40 onkeyup="chkfname()"> </td>
			</tr>
			<tr>
				<td> <font color=#5C3317> Last Name : </font> </td>
				<td> <input type="text" name="lname" size=40 onkeyup="chklname()"> </td>
			</tr>
			<tr>
				<td> <font color=#5C3317> Birth Date (dd/mm/yyyy) : </font> </td>
				<td> <input type="text" name="dd" size=3 maxlength=2 onkeyup="chkday()">
			     		&nbsp&nbsp <input type="text" name="mm" size=3 maxlength=2 onkeyup="chkmonth()"> 
			     		&nbsp&nbsp<input type="text" name="yy" size=5 maxlength=4 onkeyup="chkyear()"> 
				</td>     
			</tr>
			<tr>
				<td> <font color=#5C3317> Contact Number : </font> </td>
				<td> <input type="text" name="phno" size=40 maxlength=10 onkeyup="chkphn()">  </td>
			</tr>
			<tr>
				<td> <font color=#5C3317> Email id : </font></td>
				<td> <input type=text name="email" size=40"> </td>
			</tr>
			<tr>
				<td> <font color=#5C3317> Gender : </font></td>
				<td><font color=#5C3317> <input type=radio name="gender">Male &nbsp&nbsp&nbsp
	     			<input type=radio name="gender">Female</font> 
				<input type="hidden" name="gender1" size=40></td>
			</tr>
			<tr>
				<td> <font color=#5C3317> user Name : </font></td>
				<td> <input type=text name="uname" size=40"></td>
			</tr>
		
			<tr>
				<td> <font color=#5C3317> Password : </font></td>
				<td> <input type="password" name="pwd" size=40></td>
			</tr> 
			<tr>
				<td> <font color=#5C3317> Conform Password : </font></td>
				<td> <input type="password" name="cpwd" size=40 onblur="chkpass()"> </td>
			</tr> 
			<tr>
				<td colspan=2 align=center><font color=#5C3317> <input type="checkbox" name="agree"> I certify that I have read and agree with the terms of use and the privacy policy. </font> </td>
			</tr>
			<tr>
				<td colspan=2 align=center> 
				<input type=submit value="  Submit  " onkeyup="check()" onmousedown="check()"> &nbsp&nbsp&nbsp&nbsp&nbsp
				<input type=reset value="  Reset  "> </td>
			</tr>


			</table>
			</form>
			</td>

        		<td width="40%" valign="top">
				
		  		<br><div style="text-align:center"><img src="images/img2.jpg" width="100%" height="170" alt="" /></div><br><br>
				<div style="text-align:center"><img src="images/img8.jpg" width="100%" height="170" alt="" /></div><br><br>
				<div style="text-align:center"><img src="images/img9.jpg" width="100%" height="170" alt="" /></div>
			</td>
      		</tr>
    	</table>
	
</td>
</tr>
 

<tr>
       <td height="82" bgcolor="#AA6F47" style="background-image:url(images/index_61.gif); background-position:bottom; background-repeat:repeat-x;"><pre class="footer"><a href="index.php">Home</a>     ::     <a href="services.php">Services</a>     ::     <a href="restaurant.php">Restaurant</a>     ::     <a href="booking.php">Booking</a>     ::     <a href="gallery.php">Gallery</a>     ::     <a href="feedback.php">feedback</a><br />   </pre></td>
</tr>


</table>
</body>
</html>
