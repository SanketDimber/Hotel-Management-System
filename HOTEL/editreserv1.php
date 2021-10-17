<?php


include("connection.php");

$rs=0;
$av=0;
$count=0;

$inday=$_POST["inday"];
$inmth=$_POST["inmonth"];

$outday=$_POST["outday"];
$outmth=$_POST["outmonth"];

$rid=$_POST["rid"];
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


$room=pg_query("select * from room where type='".$type."'");

$resv= pg_query("select * from reservation where type='".$type."'");


$rom=pg_fetch_array($room);

if($rom['avail_room'] >= $nor)
{
pg_query("update reservation SET chk_in='" . $indate ."' , chk_out='". $outdate."' , nor='".$nor."', type='".$type."' , name='".$name."' , email='".$email."' ,company='".$company."' , contact='".$contact."', address='".$address."' , spe_req='".$spereq."' where res_id='".$rid."'");
		
	pg_query_params("update room set reserv_room = reserv_room + ".$nor.",avail_room=avail_room - ".$nor." where type='".$type."'");
	echo pg_last_error();
	
	echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is update sucessfully !!</font><br><br>";
}

else
{
	if($inmth == $outmth)
	{
		while($res = pg_fetch_array($resv))
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
			
			pg_query("update reservation set chk_in='" . $indate ."' , chk_out='". $outdate."' , nor=" .$nor.", type='".$type."' , name='".$name."' , email='".$email."' ,compony='".$company."' , contact=".$contact.", address='".$address."' , spe_req='".$spereq."' where res_id='".$rid."'");
			
			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is update sucessfully !!</font><br><br>";
		}
		else
		{
			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is Fail !!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>Rooms are not avilable, Please try with other reservation date</font><br><br>";
		}
	}

	if($inmth < $outmth)
	{
		while($res = pg_fetch_array($resv))
		{
			
			$idate= $res['chk_in'];
			$iday=$idate[0].$idate[1];
			$imnth=$idate[3].$idate[4];
			
			$odate=$res['chk_out'];
			$oday=$odate[0].$odate[1];
			$omnth=$odate[3].$odate[4];
			
			if($imnth < $omnth)   $oday = (intval($oday) + 31);
			if($inmth < $outmth)  $outday = (intval($outday) + 31);

			if(($inday >= $iday  &&  $inday <= $oday) ||  ($outday >= $iday && $outday <= $oday))
			{
				$rs = $rs + $res['nor'];
			}
		}
		
		$av= $rom['total_room']-$rs;
	

		if($av >= $nor)
		{
			
			pg_query("update reservation set chk_in='" . $indate ."' , chk_out='". $outdate."' , nor=" .$nor.", type='".$type."' , name='".$name."' , email='".$email."' ,compony='".$company."' , contact=".$contact.", address='".$address."' , spe_req='".$spereq."' where res_id='".$rid."'");
		
			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is update sucessfully !!</font><br><br>";
		}
		else
		{
			echo "<font color=#5C3317>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Reservation is Fail !!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>Rooms are not avilable, Please try with other reservation date</font><br><br>";
		}


	}
	

}

?>




			
