<html>
<head>
	<title>New Reservation</title>


	<script language="javascript">

	function chkname()
	{
		var keypr = event.keyCode;
		if(keypr>=65&&keypr<=91|| keypr>=97&&keypr<=122 || keypr==8 ||keypr==32 || keypr==9 ||keypr==16 ||keypr==20)
		{
		}
		else
		{
			reservation.name.value="";
			alert("Name does not contains number or special characters");
			reservation.name.focus();
		}
	}
	
	function chkcname()
	{
		var keypr = event.keyCode;
		if(keypr>=65&&keypr<=91|| keypr>=97&&keypr<=122 || keypr==8 ||keypr==32 || keypr==9 ||keypr==16 ||keypr==20)
		{
		}
		else
		{
			reservation.company.value="";
			alert("Company Name does not contains number or special characters");
			reservation.company.focus();
		}
	}
		
	function chkphn()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{}
		else
		{
			reservation.phnno.value="";
			alert("phone number does not contains characters");
			reservation.phnno.focus();
		}
	}

	function check()
	{
		var name= reservation.name.value;
		var mail= reservation.email.value;
		var cmp= reservation.company.value;
		var phno= reservation.phnno.value;

		var iday=parseInt(reservation.inday.value);
		var oday=parseInt(reservation.outday.value);

		var imnth=parseInt(reservation.inmonth.value);
		var omnth=parseInt(reservation.outmonth.value);

		var iyear=parseInt(reservation.inyear.value);
		var oyear=parseInt(reservation.outyear.value);
		
		if(imnth == omnth)
		{
			if(iday >= oday)  alert("please select the correct check-in and check-out date");
		}

		if(imnth > omnth)
		{
			alert("please select the correct check-in and check-out date");
		}

		if(iyear > oyear)
		{
			alert("please select the correct check-in and check-out date");
		}

		var atp = mail.indexOf("@");
		
		var dotp = mail.lastIndexOf(".");
		
		if(atp<1 || (dotp-atp)<2)
		{
			alert("please Enter the correct Email ID");
			reservation.email.focus();
		}
	
		if(reservation.name.value.length<1||reservation.phnno.value.length<1 || reservation.company.value.length<1 ||reservation.email.value.length<1 ||reservation.address.value.length<1)
		{
			alert("Empty form Fields !!");
		}

	}
	
	
	</script>
</head>

<body>

<?php
	include "connection.php";
?>

<form action="reserv.php" method=post name="reservation">
	
	<table width="93%" border="0" align="center" cellpadding="2" cellspacing="4">
	   <tr>
		<td align=left><font color=#5C3317>Reservation Id   :</font></td>
		<td colspan=4>
		<?php
			$count=0;
			$rid="";

			$resc=mysqli_query($con,"select * from reservation ORDER BY count");

			while($rv = mysqli_fetch_array($resc))
			{
				$count=intval($rv["count"]);
			}

			$count+=1;

			$rid = "R-".$count;

			echo "<input type=text name=resid size=20 value=$rid readonly>";
			
		?>
		</td>
	   </tr>
	   
	   <tr>
	     	<td align=left><font color=#5C3317>Check-in date  :</font></td>
	     	<td>
		
			<?php
                  		echo "<select name='inday'>";

				for($i=01;$i<=31;$i++)
				{
					if($i==date("d"))  echo "<option value='$i' selected>$i</option>";
					else               echo "<option value='$i'>$i</option>";
					
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
		
	       	</td>
	  </tr>

	  <tr>
		<td align=left><font color=#5C3317>Check-out Date   :</font></td>
		<td>
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
	</td>
	</tr>

	<tr>

		<td align=left><font color=#5C3317>Number Of Rooms   :</font></td>
	     	<td>

			<select name="nor">

			<?php
				for($i=1;$i<=20;$i++)
				{
					echo "<option value=$i>$i</option>";
				}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td align=left><font color=#5C3317>Type Of Room   :</font></td>
		<td>
			<?php
				echo "<select name=type>";
				
				$qup="select * from room";
				$rs=mysqli_query($con,$qup);
				while($res=mysqli_fetch_row($rs))
				{
					echo "<option value='".$res[0]."'>".$res[0]."</option>";
				}
				echo "<select>";
			?>
		</td>
       </tr>


	<tr>
		<td align=left><font color=#5C3317>Your Name   :</font></td>
		<td colspan=4><input type=text name=name size=40 onkeyup="chkname()"></td>
	</tr>

	<tr>
		<td align=left><font color=#5C3317>Email Id  :</font></td>
		<td colspan=4><input type="text" name="email" size=40></td>
	</tr>
	<tr>
		<td align=left><font color=#5C3317>Company Name   :</font></td>
		<td colspan=4><input type=text name=company size=40 onkeyup="chkcname()"></td>
	</tr>

	<tr>
		<td align=left><font color=#5C3317>Contact Number   :</font></td>
		<td colspan=4><input type="text" maxlength=10 name="phnno" size=40 onkeyup="chkphn()"></td>
	</tr>
	<tr>
		<td align=left valign=top><font color=#5C3317>Address   :</font></td>
		<td colspan=4><textarea name=address rows=5 cols=31></textarea></td>
	</tr>
	<tr>
		<td align=left><font color=#5C3317>Requirement If Any   :</font></td>
		<td colspan=4><textarea name=spereq rows=5 cols=31></textarea>
	</tr>

	<tr>
		<td colspan=2 align=center><input type="submit" value="  submit  " onkeyup="check()" onmousedown="check()"> &nbsp&nbsp&nbsp&nbsp
		<input type=reset name=s2 value="  clear  "><a href=bookingmain.php></a></td>
	</tr>
		

</table>

</form>

</body>