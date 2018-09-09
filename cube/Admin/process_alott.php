<?php
   error_reporting(0);
   include '..\connect.php';

$a=$_POST['sname'];
$c=$_POST['block'];
$b=$_POST['room'];
$c=$_POST['insid'];

  $sql= mysql_query("INSERT INTO alott_room(`name`,`room_id`,`block_id`) values($a,$b,$c)");

 $sql_ins_med="INSERT INTO `allot_room`(`name`,`room_id`,`block_id`) VALUES ('$a','$b','$c')";
            $res_ins_med =mysql_query($sql_ins_med,$conn);
            if(!$res_ins_med)
            {
              header('location:fees.php?msg=error');
              die;
            }
            else
            {
              
                  $sql_up_med="UPDATE `register` SET `status`='3'  where email='$email_id'";
                  $res_up_med = mysql_query($sql_up_med);
 

}





























     else{

        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Room Alotted Successfully!')
    window.location.href='alott.php';
    </SCRIPT>");

     }

?>