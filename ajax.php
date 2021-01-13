<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "akt";

 try
 {
     $con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }
$targetPath;
foreach ($_FILES['attach']['name'] as $name => $value){
if(is_uploaded_file($_FILES['attach']['tmp_name'][$name])) {
$sourcePath = $_FILES['attach']['tmp_name'][$name];
$targetPath = "cv/".$_FILES['attach']['name'][$name];
move_uploaded_file($sourcePath,$targetPath);
}
}

$insert  = json_decode($_POST["abc"]);
$query = $con->prepare("INSERT INTO applicant (name, f_name, cnic, gender, post, email, cell, country, city, experience, education, address, cv ) VALUES (
		'".htmlspecialchars($insert->name)."',
		'".htmlspecialchars($insert->fname)."',
		'".htmlspecialchars($insert->nic)."',
		'".htmlspecialchars($insert->gen)."',
		'".htmlspecialchars($insert->poss)."',
		'".htmlspecialchars($insert->mailn)."',
		'".htmlspecialchars($insert->ph)."',
		'".htmlspecialchars($insert->state)."',
		'".htmlspecialchars($insert->cty)."',
		'".htmlspecialchars($insert->expe)."',
		'".htmlspecialchars($insert->qual)."',
		'".htmlspecialchars($insert->add)."',
		'".htmlspecialchars($targetPath)."'
		
		);");

		
			
if($query->execute())
{
  $res="Your Application Received, we will call you for interview shortly.";
  echo ($res);
 
}
else {
  $error="Not Inserted,Some Probelm occur.";
  echo ($error);
}



?>