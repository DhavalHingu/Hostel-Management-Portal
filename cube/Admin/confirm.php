<?php
error_reporting(0);
   include '..\connect.php';


$ino=$_REQUEST['email'];

						$sql_up_med="UPDATE `register` SET `status`='1' where email LIKE '%$ino%'";
						$res_up_med =  mysql_query($sql_up_med);
						if(!$res_up_med)//in
						{
							//header('location:reg_view.php?msg=error');
							//die;
							  mysql_error();
						}
						else
						{
							$to = $ino;
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
							$message .= "<p style='color:#080;font-size:18px;'>Your Registration is Confirm.Please Pay Your Fees and Get Admission in Hostel. </p>";
							$message .= '</body></html>';
							
							mail($to, $subject, $message, $headers);
							header('location: reg_view.php?msg=suc');
							die;

						}
										
		
			           

				?>