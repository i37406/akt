<?php
include "connection.php";
include "session.php";
				 if (isset($_POST['sub'])){
					 
					 
					 $id=$_POST['login-email'];
					 $key=$_POST['login-password'];
					 $sql1="select * from user  where u_id='$id' AND u_pass='$key'";
					$result=mysqli_query($con, $sql1);
					$row = mysqli_fetch_assoc($result);
						$cid=$row['u_id'];
						$ckey=$row['u_pass'];
						if ($cid==$id AND $ckey==$key){
							$_SESSION['login']=$cid;
							$_SESSION['start_time']=time();
							$_SESSION['expire_time'] = $_SESSION['start_time'] + (5 * 60);
							
							header("location: validate.php");
							//echo "TRUE";
							
							
						}
						else
						{
							header("location: index.php");
							//echo "FALSE";
							
						}
						
					
				 }
				 ?>