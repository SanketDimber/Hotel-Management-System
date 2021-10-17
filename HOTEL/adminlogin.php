<!DOCTYPE html>
<html>

<head>

<title>Royal Hotel</title>

<link href="css.css" rel="stylesheet" type="text/css" />

</head>

<body bgcolor = "#5C3317">


<table width="780" border="0" height="" align="center" cellpadding="0" cellspacing="0" bgcolor="#F7E6D4">

  <tr>
    
	<td width="360" height="86" align="center" valign="top" bgcolor="#996138" 
	style="background-image:url(images/index_02.gif); background-repeat:repeat-x; background-position:top;">
	<a href="index.html"><img src="images/index_04.gif" alt="" width="304" height="80" border="0" /></a></td>
   </tr>
	</table>
	
	
      <div align = "center">
         <div style = "width:500px;height:300px; border: solid 1px #333333; background-color:#F7E6D4;" align = "center">
            <div style = "background-color:#5C3317; height:60px;color:#FFFFFF;text-align:center;font-size:30px;padding-top:19px;"><b>Admin Login</b></div>
				
            <div style = "margin:30px; font-size:22px;">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br /><br>
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
             <input type = "submit" value = " Submit "class="btn"/>&nbsp;&nbsp;&nbsp;<input type=reset class="btn"><br />
               </form>
               
               
            </div>
				
         </div>
			
      </div><center>
	  <div style = "background-color:#5C3317; height:60px;width:800px;color:#FFFFFF;text-align:center;font-size:30px;padding-top:19px;">
	  <a href="index.php"><input type=button value="HOME" class="btn2"></a></div>
	  <?php
   include("connection.php");
   session_start();
   $username=$_POST['username'];
   $password=$_POST['password'];
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    if($username=="" || $password=="")
	{
	echo "invalid username or password";

	}		
	else
	{
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and password= '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	  if($count == 1) {
        /* session_register("myusername");*/
         $_SESSION['login_user'] = $myusername;
         
         header("location: adminindex.php");
      }else 
	  {
		  $answer="invalid login details";
          $error = "<script type='text/javascript'> alert($answer); </script>";
		echo $error;
      }
	}
   }
?>
<style>
.btn2{
	background-color:light brown;
				  border: none;
				  color: #996138;
				  position:relative;
				  
				  width:250px;
				  height:50px;
				  text-align:center;
				  text-decoration: none;
				  display: inline-block;
				  font-size: 16px;
				  margin: 4px 2px;
				  cursor: pointer;
				  border-radius: 2px;
}
.btn{
	 background-color:light brown;
				  border: none;
				  color: #996138;
				  position:relative;
				  top:12px;
				  width:100px;
				  height:30px;
				  text-align:center;
				  text-decoration: none;
				  display: inline-block;
				  font-size: 16px;
				  margin: 4px 2px;
				  cursor: pointer;
				  border-radius: 2px;
		}</style>
   </body>
</html>


