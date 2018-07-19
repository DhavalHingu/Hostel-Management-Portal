<?php
error_reporting(0);
  include('connect.php');

  $a=$_POST['fname'];
  $b=$_POST['mname'];
  $c=$_POST['lname'];
  $d=$_POST['address'];
  $e=$_POST['dob'];
  $f=$_POST['contact'];
  $g=$_POST['parent'];
  $h=$_POST['email'];
  $i=$_POST['stream'];
  $j=$_POST['college'];
  $k=$_POST['result'];
  $l=$_POST['aadhar'];


 $sql=mysql_query("INSERT INTO register(`fname`,`mname`,`lname`,`address`,`dob`,`contact`,`parent`,`email`,`stream`,`college`,`result`,`aadhar`) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')");




 	if(!$sql)
 	{
       echo "not";
 	}

 	else{

$to = "vforvendetta502@gmail.com";
$subject = "Registered";
$message = "your regestration is confirm...  ";
$from = "From: dhaval7030@gmail.com";
$s=mail($to, $subject, $message, $from);

 		  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registered Successfully!')
    window.location.href='register.html';
    </SCRIPT>");
 	}

?>