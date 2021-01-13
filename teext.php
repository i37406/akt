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
        <li class="dropdown">
          <a href="pass.php">Change Password</a>
        </li>
		
		<li class="active">
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
				 <div class="col-md-12" style="text-align:center"><h2>Messages</h2></div>
				
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
					<div class="table-responsive table-bordered">
					<table class="table ">
					<th>Sr.</th>
					<th>Recipient Name</th>
					<th>Recipient Phone</th>
					<th>Recipient Email</th>
					<th>Recipient Message</th>
					<th>Date</th>
					<th>Time</th>
					<th>Action</th>
					
					<?php
							while($row = mysqli_fetch_assoc($result)){ 
							$sr++;
					?>
					<tr>
						<td><?php echo $sr; ?></td>
						<td><?php echo $row["r_name"]; ?></td>
						<td><?php echo $row["r_contact"]; ?></td>
						<td><?php echo $row["r_email"]; ?></td>
						<td><?php echo $row["r_txt"]; ?></td>
						<td><?php echo date('d-F-Y',strtotime($row["r_time"])); ?></td>
						<td><?php echo date('h:i:sa',strtotime($row["r_time"])); ?></td>
						<td><a href='teext.php?id="<?php echo $row['m_id'] ?>"' name="delete"  data-toggle='tooltip' <span class='glyphicon glyphicon-trash'></span></a></td>
					</tr>
					
							<?php
							}
							if (isset($_GET['id'])){
							$id = $_GET['id'];
							$sql="DELETE FROM message WHERE m_id = $id ";							
							if(mysqli_query($con, $sql)){
								$message = "Message Deleted Successfully";
								echo "<script type='text/javascript'>alert('$message'); window.location='teext.php';</script>";
								 
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
