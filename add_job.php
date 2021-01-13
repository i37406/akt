<?php include "connection.php"; 
		include "session.php";
		$_SESSION['now'] = time();
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
?>
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
  <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="assets/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
        <li ><a href="validate.php">Applications</a></li>
        <li class="active">
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
				 
				 <div class="col-md-4">
							<form method="POST" >
								<div class="form-group">
									<fieldset class="form-group">
										<legend >Add New Jobs</legend>
							<div class="form-group">
							<label>Title<sub>Name of Post</sub></label>
							<input placeholder="" class="form-control"  type="text" id="c_name" name="title" autocomplete="off" required >
							</div>
							<div class="form-group">
							<label>Salary</label>
							<input placeholder="40000-5000pkr" class="form-control"  type="text"  name="salary" autocomplete="off" required >
							</div>
							<div class="form-group">
							<label>Posting Country</label>
							<input placeholder="Pakistan, Saudia etc.." class="form-control"  type="text"  name="country" autocomplete="off" required >
							</div>
							<div class="form-group">
								<label >Last Date</label>
								<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" required>
								<input class="form-control" id="join_date" type="text" name="l_date" value="" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
								</div>
								
							<div class="form-group">
													<label >Mandatory Notes</label>
													<textarea class="form-control" rows="5" name="notes" id="address"></textarea>
												</div>	
							<div class="form-group">
													<input type="submit" class="btn btn-primary" name="ok" value="SUBMIT"></input>
												</div>	
										
									<fieldset>
									
												
								</div>
							</form>
				 </div>
				  <div class="col-md-2"></div>
				 <div class="col-md-6">
				 <fieldset class="form-group">
					<legend>Open Jobs</legend>
					<div class="table-responsive table-bordered">
					<table class="table">
					<th>Sr.</th>
					<th>Title</th>
					<th>Salary</th>
					<th>Country</th>
					<th>Last Date</th>
					<th>Mandatory Note</th>
					<?php	
							
							$sr=0;
							$sql1="select * from job WHERE l_date > CURDATE()  ORDER BY l_date Desc";
							$result=mysqli_query($con, $sql1);
							while($row = mysqli_fetch_assoc($result)){	$sr++;
					?>
					<tr>
						<td><?php echo $sr.'.'; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['salary']; ?></td>
						<td><?php echo $row['country']; ?></td>
						<td><?php echo (date('d-F-Y',strtotime($row["l_date"]))); ?></td>
						<td><?php echo $row['note']; ?></td>
					</tr>
					<?php
							}
					?>
					</table>
					</div>
				<fieldset>
				 </div>
				 </div>
				 </br>
					 
					 <?php
						
								if(isset($_POST['ok'])){
									
									$title=$_POST['title'];
									$pkr=$_POST['salary'];
									$notes=$_POST['notes'];
									$country=$_POST['country'];
									$ldate=(date('Y-m-d',strtotime($_POST['l_date'])));
									
									$sql="INSERT INTO `job`(`title`, `salary`, `country`, `l_date`, `note`) VALUES ('$title','$pkr','$country','$ldate','$notes')";
									if(mysqli_query($con, $sql)){
										$message = "New job advertisement added successfully";
										echo "<script type='text/javascript'>alert('$message'); window.location='add_job.php';</script>";
										
									} else{echo "error";}
								}
								
						
								
							
						

					?>
					
					<fieldset class="form-group">
					<legend>All Existed Advertisements</legend>
					<div class="table-responsive table-bordered">
					<table class="table">
					<th>Sr.</th>
					<th>Title</th>
					<th>Salary</th>
					<th>Country</th>
					<th>Last Date</th>
					<th>Mandatory Note</th>
					<th>Action</th>
					
					
					
					<?php	$sr=0;
							$sql1="select * from job  ORDER BY l_date Desc";
							$result=mysqli_query($con, $sql1);
							while($row = mysqli_fetch_assoc($result)){	$sr++;
					?>
					<tr>
						<td><?php echo $sr.'.'; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['salary']; ?></td>
						<td><?php echo $row['country']; ?></td>
						<td><?php echo (date('d-F-Y',strtotime($row["l_date"]))); ?></td>
						<td><?php echo $row['note']; ?></td>
						<td><a href='add_job.php?id="<?php echo $row['j_id'] ?>"' name="delete"  data-toggle='tooltip' <span class='glyphicon glyphicon-trash'></span></a></td>
					</tr>
					
							<?php
							}
							if (isset($_GET["id"])){
							$id = $_GET['id'];
							
							$sql="DELETE FROM job WHERE j_id = $id";
							if(mysqli_query($con, $sql)){
								$message = "Record Deleted Successfully";
								echo "<script type='text/javascript'>alert('$message'); window.location='add_job.php';</script>";
								 
							}
							
								
							}
							
							
					?>
					
					</table>
					</div>
					</fieldset>
				
					
				</div>
					
				
	
  







<script type="text/javascript" src="assets/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js" charset="UTF-8" ></script>
<script type="text/javascript" src="assets/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">
    
	$('.form_date').datetimepicker({
        
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	
</script>
</body>

</html>
<?php
								}
								
								?>
