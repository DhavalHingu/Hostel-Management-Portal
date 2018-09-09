<?php
error_reporting(0);
   include '..\connect.php';


$a=$_POST['sname'];
$b=$_POST['ft'];
$c=$_POST['tf'];
$d=$_POST['dt'];


$sql_ins_med="INSERT INTO `fees`(`email_id`,`fees_type`,`date`,`total`) VALUES ('$a','$b','$d','$c')";
						$res_ins_med =mysql_query($sql_ins_med,$conn);
						if(!$res_ins_med)
						{
							header('location:fees.php?msg=error');
							die;
						}
						else
						{
							
							$sql_sel_sub="select * from register where email='$a'";
							$res_sel_sub= mysql_query($sql_sel_sub,$conn);
							
							while ($row=mysql_fetch_array($res_sel_sub )){
								$email_id= $row['email'];
								$password=rand();
								
								
								$sql_ins_med1="INSERT INTO `login`(`email_id`,`password`,`type`) VALUES ('$email_id','$password','2')";
								$res_ins_med1=mysql_query($sql_ins_med1,$conn);
								
								if(!$res_ins_med1)
								{
									header('location:fees.php?msg=error');
									die;
								}
								else
								{
									$sql_up_med="UPDATE `register` SET `status`='2'  where email='$email_id'";
									$res_up_med = mysql_query($sql_up_med);

									//$sql_sel_sub="select * from login where email='$email_id'";
									//$res_sel_sub= mysql_query($sql_sel_sub,$conn);
										
									//while ($row=mysql_fetch_array($res_sel_sub )){
									//	$email_id= $row['email'];
									//	$password=$row['password'];
										
										
										
										$to = $email_id;
										$subject = 'Confirm Registration Mail';
										$from = 'dhaval7030@gmail.com';
											
										// To send HTML mail, the Content-type header must be set
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
											
										// Create email headers
										$headers .= 'From: '.$from."\r\n".
												'Reply-To: '.$from."\r\n" .
												'X-Mailer: PHP/' . phpversion();
											
										// Compose a simple HTML email message
										$message = '<html><body>';
										$message .= "<p style='color:#080;font-size:18px;'>Your UserName is :- $email_id </p>";
										$message .= "<p style='color:#080;font-size:18px;'>Your Password is :- $password </p>";
										$message .= '</body></html>';
											
										mail($to, $subject, $message, $headers);
										header('location:fees.php?msg=suc');
										die;
										die;
									}
									
								}
							}
							
							
							
						
										
		
				
		

						?>