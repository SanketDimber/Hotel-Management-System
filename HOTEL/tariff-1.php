<?php
include("connection.php");
echo "<table border=1 cellpadding=7 cellspacing=4 width=95%>";
echo "<tr> <th><font color=#5C3317>Room Type</font></th>  <th><font color=#5C3317>Total Rooms</font></th>  <th><font color=#5C3317>Reserved Rooms</font</th> <th><font color=#5C3317>Available Rooms</font></th> <th><font color=#5C3317>Charges/Day</font></th> </tr>";
$room=pg_query("select * from room");
while($row = pg_fetch_row($room))
{
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}
echo "</table>"
 ?>			
