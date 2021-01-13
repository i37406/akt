


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
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
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
        <li class="active"><a href="validate.php">Applications</a></li>
        <li class="dropdown">
          <a href="add_job.php">Add New Jobs</a>
          
        </li>
        <li class="dropdown">
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
				 <div class="col-md-8"><h2>Applications Received</h2></div>
				 <div class="col-md-4"><h3><a href="app_search.php">Search Post Wise</a></h3></div>
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
									
						
								$sql="select * from applicant ORDER BY name ASC";
								$result=mysqli_query($con, $sql);
							
						

					?>
					<div class="table-responsive table-bordered">
					<table class="table ">
					
					<?php
							while($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><b>Applicant Name:</br></b><?php echo $row["name"]; ?> </br><b>Cnic:</br></b> <?php echo $row["cnic"]; ?> </br><b>Cell #:</br></b> <?php echo $row["cell"]; ?></td>
						<td><b>Gender:</br></b><?php echo $row["gender"]; ?> </br><b>Father Name:</br></b> <?php echo $row["f_name"]; ?> </br><b>Email:</br></b> <?php echo $row["email"]; ?></td>
						<td><b>Post Applied:</br></b><?php echo $row["post"]; ?> </br><b>Education:</br></b> <?php echo $row["education"]; ?> </br><b>Total Experience:</br></b> <?php echo $row["experience"]; ?></td>
						<td><b>Postal Address:</br></b><?php echo $row["address"]; ?> </td>
						<td><b>City:</br></b><?php echo $row["city"]; ?> </br><b>Country:</br></b> <?php echo $row["country"]; ?> </br><b><a href="<?php echo $row["cv"]; ?>">C.V</br></b> </td>
						<td><a href='validate.php?id="<?php echo $row['id'] ?>"' name="delete"  data-toggle='tooltip' <span class='glyphicon glyphicon-trash'></span></a></td>
					</tr>
					
							<?php
							}
							if (isset($_GET["id"])){
							$id = $_GET['id'];
							
							$sql="DELETE FROM applicant WHERE id = $id ";
							if(mysqli_query($con, $sql)){
								$message = "Record Deleted Successfully";
								echo "<script type='text/javascript'>alert('$message'); window.location='validate.php';</script>";
								 
							}
							//header("location: validate.php");
								
							}
							
							
					?>
					
					</table>
					</div>
					<?php
								}
					?>
					
					
				</div>
					
				
	
  








</body>
</html>
