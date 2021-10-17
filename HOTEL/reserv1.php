<html>
<head>
	<script language="javascript">
		
	function chkadv()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{}
		else
		{
			reservation.adv.value="";
			alert("advance payment does not contains characters");
			reservation.adv.focus();
		}
	}
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
	function chkbname()
	{
		var keypr = event.keyCode;
		if(keypr>=65&&keypr<=91|| keypr>=97&&keypr<=122 || keypr==8 ||keypr==32 || keypr==9 ||keypr==16 ||keypr==20)
		{
		}
		else
		{
			reservation.bank.value="";
			alert("Name does not contains number or special characters");
			reservation.bank.focus();
		}
	}

	function chkcvv()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{}
		else
		{
			reservation.cvv.value="";
			alert("cvv number does not contains characters");
			reservation.cvv.focus();
		}
	}
		
	function chkcre()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{}
		else
		{
			reservation.credit.value="";
			alert("credit number does not contains characters");
			reservation.credit.focus();
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
			reservation.fdd.value="";
			alert("day does not contains characters");
			reservation.fdd.focus();
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
			reservation.fmm.value="";
			reservation.fmm.focus();
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
			reservation.fyy.focus();
			reservation.fyy.value="";
			alert("year does not contains characters");
			
		}
	}
	function chktday()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{
		}
		else
		{
			reservation.tdd.value="";
			alert("day does not contains characters");
			reservation.tdd.focus();
		}
	}
	
	function chktmonth()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{
		}
		else
		{
			alert("month does not contains characters");
			reservation.tmm.value="";
			reservation.tmm.focus();
		}
	}
	
	function chktyear()
	{
		var keypr = event.keyCode;
		if(keypr>=48 && keypr<=57 || keypr==8 || keypr==9)
		{
		}
		else
		{
			reservation.tyy.focus();
			reservation.tyy.value="";
			alert("year does not contains characters");
			
		}
	}
	function check()
	{
		var fdd= reservation.fdd.value;
		var fmm= reservation.fmm.value;
		var fyy= reservation.fyy.value;
		
		var tdd= reservation.fdd.value;
		var tmm= reservation.fmm.value;
		var tyy= reservation.fyy.value;

		if(reservation.adv.value<=0 || reservation.credit.value<=0)
		{
			
			alert("advance balance and credit number does not contain < 0 !!");
		}
		if(reservation.credit.value.length<16)
		{
			alert("credit card number does not contain < 16 !!");

		}
	
		if(reservation.adv.value.length<1||reservation.credit.value.length<1||reservation.name.value.length<1||reservation.cvv.value.length<1||reservation.bank.value.length<1)
		{
			alert("Empty form Fields !!");
		}
		if(fdd>="1" && fdd<="31" || fmm>="1" && fmm<="12" || fyy>="1900" && fyy<="2020")
		{}
		else
		{
				alert("please Enter the Day between 1 to 31, month between 1 to 12, year between 1900 to 2020");
				reservation.fdd.value="";
				reservation.fmm.value="";
				reservation.fyy.value="";
				reservation.fdd.focus();
		}
		if(tdd>="1" && tdd<="31" || tmm>="1" && tmm<="12" || tyy>="1900" && tyy<="2020")
		{}
		else
		{
				alert("please Enter the Day between 1 to 31, month between 1 to 12, year between 1900 to 2020");
				reservation.tdd.value="";
				reservation.tmm.value="";
				reservation.tyy.value="";
				reservation.tdd.focus();
		}

	}
	
	
	</script>
</head>

<body>

<?php


include("connection.php");

$rs=0;
$av=0;
$count=0;
$check=0;

$inday=$_POST["inday"];
$inmth=$_POST["inmonth"];

$outday=$_POST["outday"];
$outmth=$_POST["outmonth"];

$rid=$_POST["resid"];
$type=$_POST["type"];
$nor =$_POST["nor"];
$name=$_POST["name"];
$email=$_POST["email"];
$company=$_POST["company"];
$contact=$_POST["phnno"];
$address=$_POST["address"];
$spereq=$_POST["spereq"];

if($inday < 10)   $inday= "0".$inday;
if($inmth < 10)   $inmth= "0".$inmth;

if($outday < 10)   $outday= "0".$outday;
if($outmth < 10)   $outmth= "0".$outmth;

$indate =$inday.'/'.$inmth .'/'.$_POST["inyear"];
$outdate =$outday.'/'.$outmth .'/'.$_POST["outyear"];

$resc=mysqli_query($con,"select * from reservation ORDER BY count");

while($rv = mysqli_fetch_array($resc))
{
	$count=intval($rv["count"]);
}

$count+=1;


$room=mysqli_query($con,"select * from room where type='".$type."'");

$resv= mysqli_query($con,"select * from reservation where type='".$type."'");


$rom=mysqli_fetch_array($room);

if($rom['avail_room'] >= $nor)
{
	mysqli_query($con,"insert into reservation values('R-".$count."','" . $indate ."','". $outdate."'," .$nor.",'".$type."','".$name."','".$email."','".$company."',".$contact.",'".$address."','".$spereq."',".$count.")");
	
	//mysqli_query("update room set reserv_room = reserv_room +".$nor.", avail_room=avail_room-".$nor." where type='".$type."'");
	
	$check=1;
	
	echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is done sucessfully !! Please Fill your Payment Details.</font><br><br>";
}

else
{
	if($inmth == $outmth)
	{
		while($res = mysqli_fetch_array($resv))
		{
			$idate= $res['chk_in'];
			$iday=$idate[0].$idate[1];
			$imnth=$idate[3].$idate[4];
			
			$odate=$res['chk_out'];
			$oday=$odate[0].$odate[1];
			$omnth=$odate[3].$odate[4];
			
			if($imnth < $omnth)   $oday = (intval($oday) + 31);
				
			if(($inday >= $iday  &&  $inday <= $oday) ||  ($outday >= $iday && $outday <= $oday))
			{
				$rs = $rs + $res['nor'];
			}

		}
	
		$av= $rom['total_room']-$rs;

		if($av >= $nor)
		{
			mysqli_query("insert into reservation values('R-".$count."','" . $indate ."','". $outdate."'," .$nor.",'".$type."','".$name."','".$email."','".$company."',".$contact.",'".$address."','".$spereq."',".$count.")");
			
			$check=1;
			
			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is done sucessfully !! Please Fill your Payment Details.</font><br><br>";
		}
		else
		{
			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is Fail !!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>Rooms are not avilable, Please try with other reservation date</font><br><br>";
		}
	}

	if($inmth < $outmth)
	{
		
		if($inmth < $outmth)  $outday = (intval($outday) + 31);
		echo $outday;
		while($res = mysqli_fetch_array($resv))
		{
			
			$idate= $res['chk_in'];
			$iday=$idate[0].$idate[1];
			$imnth=$idate[3].$idate[4];
			
			$odate=$res['chk_out'];
			$oday=$odate[0].$odate[1];
			$omnth=$odate[3].$odate[4];
			
			if($imnth < $omnth)   $oday = (intval($oday) + 31);
			

			if(($inday >= $iday  &&  $inday <= $oday) ||  ($outday >= $iday && $outday <= $oday))
			{
				$rs = $rs + $res['nor'];
			}
		}
		
		$av= $rom['total_room']-$rs;
	

		if($av >= $nor)
		{
			mysqli_query("insert into reservation values('R-".$count."','" . $indate ."','". $outdate."'," .$nor.",'".$type."','".$name."','".$email."','".$company."',".$contact.",'".$address."','".$spereq."',".$count.")");
			
			$check=1;

			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is done sucessfully !! Please Fill your Payment Details.</font><br><br>";
		}
		else
		{
			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is Fail !!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>Rooms are not avilable, Please try with other reservation date</font><br><br>";
		}


	}
	

}


if($check==1)
{

if($inmth < $outmth)  $noutday = (intval($outday) + 31);
else $noutday=$outday;

$nod=$noutday-$inday;

$tot=$nod*($rom[4] * $nor);

$rid="R-".$count;

echo"<form action=payment.php method=post name=reservation>";
	
		
	echo"<table border=0 cellspacing=5 cellpadding=7 align=center>";
	 echo"<tr>";
		echo"<td><font color=#5C3317>Reservation ID   :</font></td>";
		echo"<td><input type=text name=rid size=40 value=$rid readonly></td>";
	echo"</tr>";

	 echo"<tr>";
		echo"<td><font color=#5C3317>Room Type  :</font></td>";
		echo"<td><input type=text name=type size=40 value=$type readonly></td>";
	echo"</tr>";

	 echo"<tr>";
		echo"<td><font color=#5C3317>Number Of Days  :</font></td>";
		echo"<td><input type=text name=nod size=40 value=$nod readonly><br>";
		echo"<input type=hidden name=nor size=40 value=$nor></td>";
	echo"</tr>";

	 echo"<tr>";
		echo"<td><font color=#5C3317>Total Payment  :</font></td>";
		echo"<td><input type=text name=total size=40 value=$tot readonly></td>";
	echo"</tr>";

	echo"<tr>";
		echo"<td><font color=#5C3317>Advance Payment :</font></td>";
		echo"<td><input type=text name=adv size=40 onkeyup=chkadv()></td>";
	echo"</tr>";

	 echo"<tr>";
		echo"<td><font color=#5C3317>Credit Card Number  :</font></td>";
		echo"<td><input type=text name=credit maxlength=16 size=40 onkeyup=chkcre()></td>";
	echo"</tr>";
	 echo"<tr>";
		echo"<td><font color=#5C3317>Account holder Name  :</font></td>";
		echo"<td><input type=text name=name size=40 onkeyup=chkname()></td>";
	echo"</tr>";
	 echo"<tr>";
		echo"<td><font color=#5C3317>CVV Number  :</font></td>";
		echo"<td><input type=text name=cvv maxlength=3 size=40 onkeyup=chkcvv()></td>";
	echo"</tr>";
	echo"<tr>";
				echo"<td> <font color=#5C3317> Valid From Date (dd/mm/yyyy) : </font> </td>";
					echo"<td> <input type=text name=fdd size=3 maxlength=2 onkeyup=chkday()>";
			     		echo"&nbsp&nbsp <input type=text name=fmm size=3 maxlength=2 onkeyup=chkmonth()>"; 
			     		echo"&nbsp&nbsp<input type=text name=fyy size=5 maxlength=4 onkeyup=chkyear()>"; 
				echo"</td>";    
	echo"</tr>";
	echo"<tr>";
				echo"<td> <font color=#5C3317> Valid To Date (dd/mm/yyyy) : </font> </td>";
					echo"<td> <input type=text name=tdd size=3 maxlength=2 onkeyup=chktday()>";
			     		echo"&nbsp&nbsp <input type=text name=tmm size=3 maxlength=2 onkeyup=chktmonth()>"; 
			     		echo"&nbsp&nbsp<input type=text name=tyy size=5 maxlength=4 onkeyup=chktyear()>"; 
				echo"</td>";    
	echo"</tr>";
	 echo"<tr>";
		echo"<td><font color=#5C3317>Bank Name  :</font></td>";
		echo"<td><input type=text name=bank size=40 onkeyup=chkbname()></td>";
	echo"</tr>";
	echo"<tr>";
		echo"<td colspan=2 align=center> <input type=submit value=  submit onkeyup=check() onmousedown=check()>"; 
		echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=Reset value= Reset></td>";
	echo"</tr>";

	echo"</table>";
		
echo"</form>";

}

?>


</body>
</html>



			