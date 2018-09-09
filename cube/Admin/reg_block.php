<?php
     error_reporting(0);
   include '..\connect.php';
  
     $a=$_POST['block'];


     $sql= mysql_query("INSERT INTO block_master(`block_no`) values($a)");

     if(!$sql)
     {
        mysql_error(); 	
     }

     else{

        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Block added Successfully!')
    window.location.href='block.php';
    </SCRIPT>");

     }