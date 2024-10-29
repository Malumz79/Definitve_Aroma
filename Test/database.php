<?php


	if(isset($_POST["submit"])){
		

    $hostName = "localhost";
    $databaseUser = "root";
    $databasePassword="";
    $databaseName="mylogin";
		
		$conn = mysqli_connect($hostName,$databaseUser, $databasePassword,$databaseName);


if (!$conn){die("Something went wrong");}
	
	$userName = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmPassword"];
	$conn;
	
	$passwordHash= password_hash($password,PASSWORD_DEFAULT);
	
	
	$errors=array();
	
	if (empty($fullname) OR empty($email) OR empty($password) OR empty($confirmpassword) ){array_push($errors,"All fields are required");} 
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){array_push($errors,"Email is invalid");}
	
    //if (empty($_POST["fname"])) {array_push($errors,"Name is reuired ");} elseif(!preg_match("/^[a-zA-Z0-9_]*$/", $fullname)) {echo "Only alphabets, numbers, and underscores are allowed for Full Name";} else{echo $fullname;}
	
	//if (empty($_POST["sname"])) {array_push($errors, "Surname is required");} elseif(!preg_match("/^[a-zA-Z0-9_]*$/", $Surname)) {echo  "Only alphabets, numbers, and underscores are allowed for the Surname";} else{echo $Surname;}
	
    //if (empty($_POST["contact"])) {array_push($errors, "Phone Number is required");} elseif (!preg_match("/^[0-9]*$/", $Cellnumber)){$Cellnumber = input_data($_POST["contact"]); echo "Please enter a valid phone number!!";}elseif (strlen($Cellnumber) != 10) {echo "Please provide a phone number of 10 digits!!";} else{echo $Cellnumber;}
	
	//if (strlen($Cellnumber)<10){array_push($errors,"Contact must be 10 digits");} elseif(strlen($Cellnumber)>10) {array_push($errors,"Contact must be 10 digits");}

	
	
	if(strlen($password)<8){array_push($errors,"Password must be at least 8 characters long");}
	
	if ($password!==$confirmpassword){
		array_push($errors,"Password does not match");
	}


	
	if (count($errors)>0){foreach($errors as $error){echo "<div class='alert alert-danger'>$error</div>";}}else{
		require_once "database.php"; $sql ="INSERT INTO mylog(username,useremail, password) VALUES(?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);
		$prepareStmt = mysqli_stmt_prepare($stmt,$sql);
		
		if($prepareStmt){mysqli_stmt_bind_param($stmt,"sss",$user,$email,$passwordHash); mysqli_stmt_execute($stmt); echo "<div class='alert alert-success'>You are registered successfully</div>";}else{die("Something went wrong");}
		}




	
	
	

	
}



?>