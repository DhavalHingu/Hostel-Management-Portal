<?php
// Developed by Dhaval Hingu
@session_start();
 
    
 $conn=mysql_connect("localhost","root","")or die(mysql_error());
 $db=mysql_select_db('cube',$conn)or die(mysql_error());


?>