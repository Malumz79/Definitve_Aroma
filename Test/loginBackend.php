<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['login'])){
	
	 $hostName="localhost";
	 $dbUser="root";
	 $dbPassword="";
	 $dbName="ecommerce";
	
	 $conn=mysqli_connect($hostName, $dbUser,$dbPassword,$dbName);
	
	
     $email =$_POST['email'];
     $password =$_POST['password'];
     require_once  "Backend.php";


     $sql = "SELECT * FROM users WHERE email = '$email'";
     $result = mysqli_query($conn, $sql);
     $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
     if($user){
	     if(password_verify($password,$user["password"])){
		 header("Location: home.php");
		    }else{echo "<div class='alert alert-danger'>Password does not match</div>";}

        }else{echo "<div class='alert alert-danger'>Email does not match</div>";}
    } 


}

?>