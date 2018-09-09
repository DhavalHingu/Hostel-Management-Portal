<?php
 error_reporting(0);
 include 'connect.php';

$a=$_POST['email'];
$b=$_POST['pswd'];


$sql="SELECT * FROM login  WHERE email_id = '$a' AND password = '$b'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
$type=$row['type'];

$count=mysql_num_rows($result);

    if($count == 1)
    {
    	
        
         if($type == '1')
         {
         	header("Location:Admin/index.html");
         	die;
         	
	        
         }
         else
         {
         	 header("Location:/Student/index.html");
	         die;
         	
         }
    }       
    else
    {
          echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login credentials Invalid !')
    window.location.href='login.html';
    </SCRIPT>");
       }




 ?>