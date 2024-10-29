<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

if(isset($_POST['signup']){
	
	
	 $fullnameErr = "";
     $emailErr = "";
     $CellnumberErr = "";
     $genderErr = "";
     $websiteErr = "";
     $tcErr = "";
// For holding user data
     $fullanme = "";
     $email = "";
     $phoneNo = "";
     $gender = "";
     $website = "";
     $tc = "";
	
	
	
	
	
	
	
	
	
	    if (empty($_POST["name"])) {
        $userNameErr = "User Name is required";
        } else {
        $userName = input_data($_POST["name"]);
        // To check that User Name only contains alphabets, numbers, and underscores 
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $userName)) {
            $userNameErr = 
              "Only alphabets, numbers, and underscores are allowed for User Name";
            }
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    }



}



?>