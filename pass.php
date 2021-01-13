<html lang="en">
<head>
  <title>AL-Kurdee Traders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.js" ></script>
  <!--Calender-->
 
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" >Al-Kurdee Traders</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a href="validate.php">Applications</a></li>
        <li class="dropdown">
          <a href="add_job.php">Add New Jobs</a>
          
        </li>
        <li class="active">
          <a href="pass.php">Change Password</a>
        </li>
		
		<li class="dropdown">
          <a href="teext.php">Messages</a>
        </li>
		<li class="dropdown">
          <a href="logout.php">Logout</a>
        </li>
		
        
        
		
      
    </div>
  </div>
</nav>




	
				 <div class="container" style="background:#f5f5f5; opacity:0.9;">
				 </br>
				 <div class="row">
				 <div class="col-md-12" style="text-align:center"><h3>Here You are able to change Password.</h3></div>
				
				 </div>
				 </br>
					 
					 <?php
						include "connection.php";
						include "session.php";
						 $_SESSION['now'] = time();
						 unset($_SESSION['position']);
						 if (!isset($_SESSION['login'])){
							 header('Location: index.php');
						 }
						else if ($_SESSION['now'] > $_SESSION['expire_time']) {
							unset($_SESSION['login']);
							unset($_SESSION['start_time']);
							unset($_SESSION['expire_time']);
							unset($_SESSION['now']);
							session_destroy();
							header('Location: index.php');
							}
								else{
									$_SESSION['expire_time'] = $_SESSION['now'] + (5 * 60);
									
						
								$sql="SELECT * FROM `message` ORDER BY `r_time` DESC";
								$result=mysqli_query($con, $sql);
								$sr=0;
							
						

					?>
					<div class="col-md-4" style="text-align:center"></br></div>
					 <div class="col-md-4" >
									<form action="pass.php" id="i_form" method="POST">
									
												<div class="form-group">
													<label >Old Password</label>
													<input type="password" class="form-control c-square" name="old" id="r_name" required>
												</div>
												<div class="form-group">
													<label >New Password</label>
													<input type="password" class="form-control c-square" name="new"id="fname" required>
													
												</div>
												
												<input type="submit" id="btnn" class="btn btn-primary"  name="ok" value="Submit" />
									</form>
									<?php
										if(isset($_POST['ok'])){
											$old=$_POST['old'];
											$new=$_POST['new'];
											$sql="SELECT * FROM `user` where u_pass='$old'";
											$result=mysqli_query($con, $sql);
											$row=mysqli_fetch_assoc($result);
											if($row['u_pass']==$old){
											$sql="UPDATE user SET u_pass='$new' WHERE u_pass='$old' ";
											
											if(mysqli_query($con, $sql)){
												$message = "Your Password updated Successfully.";
											echo "<script type='text/javascript'>alert('$message'); window.location='pass.php'; </script>";
												
											}
											else{
												$message = "Your Password not updated.";
											echo "<script type='text/javascript'>alert('$message'); window.location='pass.php'; </script>";
											}
											}
											else{
												$message = "You Entered the wrong old password.";
												echo "<script type='text/javascript'>alert('$message');window.location='logout.php'; </script>";
											}
										}
									?>
						</div>
						<div class="col-md-4" style="text-align:center"></br></div>
								
					
					<?php
								}
					?>
					
					
				</div>
					
				
	
  








</body>
</html>
