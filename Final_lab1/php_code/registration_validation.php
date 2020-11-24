<?php

	$uname="";
	$err_uname="";
	$pass="";
    $err_pass="";
	$hasError=false;
	
	$username="root";
    $servername="localhost";
	$password="";
	$db_name="mydb";


	
	if(isset($_POST["ok"])){
        
        //USERNAME VALIDATION
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long!";
            $hasError=true;
        }
		else{
			$uname = htmlspecialchars($_POST["uname"]);
        }
        //PASSWORD VALIDATION
		if(empty($_POST["pass"])){
            $err_pass="Please Enter Password!";
            $hasError=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            $hasError=true;
        }
        elseif(!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass="Password must have 1 numeric";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["pass"]),$_POST["pass"])==0 && strcmp(strtolower($_POST["pass"]),$_POST["pass"])==0){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["pass"],"#")==false && strpos($_POST["pass"],"?")==false){
            $err_pass="Password must contain '#' or '?'.";
            $hasError=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        
        
        
		
		if(!$hasError){
				
	        $conn = mysqli_connect($servername,$username,$password,$db_name);
	
	        if(!$conn){
		        die("Connection failed: " .mysqli_connect_error());
	        }
	
	        mysqli_query($conn,"INSERT INTO user(id,username,password,usertype) VALUES('1234','$uname','$pass','user')");
		    header("Location: login.php");
		}
	}
	
?>