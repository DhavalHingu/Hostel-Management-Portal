<?php
     error_reporting(0);
   include '..\connect.php';
  
     $a=$_POST['room'];
     $b=$_POST['block'];

     $sql= mysql_query("INSERT INTO room_master(`room_no`,`block_no`) values($a,$b)");

     if(!$sql)
     {
        mysql_error(); 	
     }

     else{
        

        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Room added Successfully!')
    window.location.href='room.php';
    </SCRIPT>");

     }
  ?>   