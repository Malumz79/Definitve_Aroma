<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 if(isset($_POST['signup'])){
 
 
     $Email= $_POST["signUpEmail"];
     $Passowrd = $_POST["signUpPassword"];
     $ConfirmPassword = $_POST["signUpConfirmPass"];
     $passwordHash = password_hash($Passowrd, PASSWORD_DEFAULT);
	 $error= array();
	 
	 $hostName="localhost";
	 $dbUser="root";
	 $dbPassword="";
	 $dbName="ecommerce";
	 
	 
	 $conn=mysqli_connect($hostName, $dbUser,$dbPassword,$dbName);
	 
	 if(!$conn){ die ("something went wrong");}
 
 
     if(empty($Email) or empty($Passowrd) or empty($ConfirmPassword)){array_push($error, "All fields are required");}
 
      if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){array_push($error,"Email is not valid");}
 
      if(strlen($Passowrd)<8){ array_push($error, "Passowrd must be atleast 8 characters Long");}
 
 
      if($Passowrd !== $ConfirmPassword){ array_push($error, "Passowrd does not match");}
  
    /* $sql= "SELECT * FROM users WHERE email = '$Email'";
	 require_once "Backend.php";
	 $result= mysqli_query($conn,$sql);
	 $rowCount = mysqli_num_rows($result);
	 
	 if($rowCount>0){array_push($error,"Email already exists");}
	 */
	 
     if(count($error)>0){
	     
         foreach($error as $errors){ echo "<div class=' alert alert-danger'>$error</div>";}  
        }else{
			require_once "Backend.php";
		     $sql="INSERT INTO users (email,password) VALUES(?,?)";
			 $stmt= mysqli_stmt_init($conn);
			 $prepareStmt=mysqli_stmt_prepare($stmt,$sql);
			 if($prepareStmt){mysqli_stmt_bind_param(
			       $stmt,"ss",$Email,$passwordHash ); 
			       mysqli_stmt_execute($stmt);echo"<div class='alert alert-success'>registered successfully</div>";
				   
			    }else{die("someething went wrong");}
		    }
	 
     }   
     $response = [
        "status" => "success",
        "message" => "Data received successfully!"
     ];

     /*header("Content-Type: application/json"); json_encode()*/
     echo json_encode($response);
    

}



?>