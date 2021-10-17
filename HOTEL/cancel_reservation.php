<html>
<head>
	<title>Cancel Reservation</title>
			
</head>

<body bgcolor="#fff2e5">

<?php
	include "connection.php";

	$rid=$_POST["rid"];
	$name=$_POST["name"];
				
	$rs=pg_query("select * from reservation where res_id='".$rid."' AND name='".$name."'");
	$no=pg_num_rows($rs);

	if(pg_num_rows($rs)<=0) 
	{
		header("location:cancel_reservation_form.php");
		exit();
	}
?>

<form action="cancelreserv.php" method=post name="reservation">
	
<table width="93%" border="0" align="center" cellpadding="2" cellspacing="4">


	 <tr>
		<td align=left ><font color=#5C3317>Reservation Id   :</font></td>
		<td colspan=4>

		<?php 
			$rid=$_POST["rid"];

			echo "<input type=text name=rid size=20 value=$rid readonly>";
			
		?>
		</td>
	 </tr>
	
	   
	   <tr>
	     	<td align=left><font color=#5C3317>Check-in Date   :</font></td>
	     	<td>
		
			<?php
				$rid=$_POST["rid"];
					
				$rs=pg_query("select * from reservation where res_id='".$rid."' AND name='".$name."'");

                  		$res=pg_fetch_row($rs);

				$idate= $res[1];
				$iday=$idate[0].$idate[1];
				$imnth=$idate[3].$idate[4];
				$iyear=$idate[6].$idate[7].$idate[8].$idate[9];
			
				echo "<select name='inday'>";

				for($i=1;$i<=31;$i++)
				{
					if($iday==$i)   echo "<option value='$i' selected>$i</option>";
				        else            echo "<option value='$i'>$i</option>";
					
				}

                   		echo "</select>&nbsp&nbsp";
				
                  		echo "<select name='inmonth'>";

				for($i=1;$i<=12;$i++)
				{
					if($i==$imnth) echo "<option value='$i' selected>$i</option>";
				
					else            echo "<option value='$i'>$i</option>";
				}
			
                  		echo "</select>&nbsp&nbsp";
		
				echo "<select name='inyear'>";

				for($i=2013;$i<=2020;$i++)
				{
					if($i==$iyear) echo "<option value='$i' selected>$i</option>";
					else           echo "<option value='$i'>$i</option>";
			
				}
				echo "</select>";
			
		
	       	echo "</td>";
	  echo "</tr>";

	  echo "<tr>";

		echo "<td align=left><font color=#5C3317>Check-out Date   :</font></td>";
		echo"<td>";
		
			$odate=$res[2];
			$oday=$odate[0].$odate[1];
			$omnth=$odate[3].$odate[4];
			$oyear=$odate[6].$odate[7].$odate[8].$odate[9];
			
			echo "<select name='outday'>";
	
		 	for($i=1;$i<=31;$i++)
		 	{

				if($i==$oday) echo "<option value='$i' selected>$i</option>";
				else              echo "<option value='$i'>$i</option>";

			}
		
	    		echo "</select>&nbsp&nbsp";	
			
			echo "<select name='outmonth'>";
		
			for($i=1;$i<=12;$i++)
			{
				if($i==$omnth) echo "<option value='$i' selected>$i</option>";
				else              echo "<option value='$i'>$i</option>";

			}
		
			echo "</select>&nbsp&nbsp";
			
			echo "<select name='outyear'>";
			for($i=2013;$i<=2020;$i++)
			{
				if($i==$oyear)  echo "<option value=$i selected>".$i."</option>";
				else               echo "<option value=$i>".$i."</option>";
			
			}
			echo "</select>";
	
	echo"</td>";
	echo"</tr>";

	echo"<tr>";

		echo"<td align=left><font color=#5C3317>Number of rooms   :</font></td>";
	     	echo"<td>";

			$nr=$res[3];

			echo"<select name=nor>";

				for($i=1;$i<=20;$i++)
				{
					
					if($i==$nr)  echo "<option value=$i selected>".$i."</option>";
					else         echo "<option value=$i>".$i."</option>";
				}
		
			echo"</select>";
		echo"</td>";
	echo"</tr>";
		
		echo"<tr>";
		echo"<td align=left><font color=#5C3317>Type Of Room   :</font></td>";
		echo"<td>";
			
				echo "<select name=type>";
				
				$tp=$res[4];

				$rm=pg_query("select * from room");
				while($rom=pg_fetch_row($rm))
				{
					
					if($rom[0]==$tp)   echo "<option value='".$rom[0]."' selected>".$rom[0]."</option>";

					else echo "<option value='".$rom[0]."'>".$rom[0]."</option>";
				}
				echo "<select>";
			
		echo"</td>";
	
		echo"<td> </td>";
       echo"</tr>";


	echo"<tr>";
		$name=$_POST["name"];
		echo"<td align=left><font color=#5C3317>Your name:</font></td>";
		echo"<td colspan=4><input type=text name=name size=40 value=$name readonly></td>";
	echo"</tr>";

	echo"<tr>";
		$ema=$res[6];
		echo"<td align=left><font color=#5C3317>Email Id :</font></td>";
		echo"<td colspan=4><input type=text name=email size=40 value=$ema readonly></td>";
	echo"</tr>";
	
	echo"<tr>";
		$cmp=$res[7];
		echo"<td align=left><font color=#5C3317>Company Name:</font></td>";
		echo"<td colspan=4><input type=text name=company size=40 value=$cmp readonly></td>";
	echo"</tr>";

	echo"<tr>";
		$cnt=$res[8];
		echo"<td align=left><font color=#5C3317>Contact Number:</font></td>";
		echo"<td colspan=4><input type=text name=phnno maxlength=10 size=40 value=$cnt readonly></td>";
	echo"</tr>";
	echo"<tr>";
		$arr=$res[9];
		echo"<td align=left valign=top><font color=#5C3317>Address :</font></td>";
		echo"<td colspan=4><textarea name=address rows=5 cols=31 readonly>$arr</textarea></td>";
	echo"</tr>";
	echo"<tr>";
		$sp=$res[10];
		echo"<td align=left><font color=#5C3317>Special Requirement If Any :</font></td>";
		echo"<td colspan=4><textarea name=spereq rows=5 cols=31 readonly>$sp</textarea>";
	?>
	</tr>
	<tr>
		<td colspan=2 align=center><input type="submit" value="Delete"> &nbsp&nbsp&nbsp&nbsp&nbsp
		<input type=reset name=s2 value="clear"><a href=reservation.php></a></td>
	</tr>
	

	
</table>

</form>

</body>