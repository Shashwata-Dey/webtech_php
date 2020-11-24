<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_msg="";
	$hasError=false;
	$flag=false;
	
	$username="root";
    $servername="localhost";
	$password="";
	$db_name="mydb";
	
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError){
			
			$conn = mysqli_connect($servername,$username,$password,$db_name);
	
	        if(!$conn){
		        die("Connection failed: " .mysqli_connect_error());
	        }
			$query="SELECT * FROM user";
			$results=mysqli_query($conn,$query);
			
			
			$flag=false;
			
            if($query = mysqli_query($conn, "SELECT username,password FROM user WHERE username='$uname' AND password='$pass'")){

				$flag=true;
				
            }
			
			
			if(!$flag){
				$err_uname="Invalid Credentials!";
			}
			else{
				
				//echo "<th> log in suceess</td>";
				if(mysqli_num_rows($results)>0){
				echo '<table border="1" style="border-collapse:collapse;">';
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Username</th>";
				echo "<th>Usertype</th>";
				
				while($row=mysqli_fetch_assoc($results)){
					
					echo "<tr>";
					    echo "<td>".$row["id"]."</td>";
					    echo "<td>".$row["username"]."</td>";
					    echo "<td>".$row["usertype"]."</td>";
					echo '</tr>';
				}
				echo '</table>';
			    }  
               
			}
		}
	}
	
?>