<?php
   $err_name = "";
   $err_pass = "";
   $has_err = false;
   if (isset($_POST["login"])) {
   	 if (empty($_POST["uname"])) {
       $has_err = true;
       $err_name = "Required*";
   	 }
   	 if (empty($_POST["pass"])) {
   	   $has_err = true;
   	   $err_pass = "Required*";
   	 }
   }
   if (isset($_POST["login"]) && !$has_err) {
   	 $checkList = simplexml_load_file("admins.xml");
   	 $checkList = $checkList->admin;
   	 $is_success = false;
   	 foreach ($checkList as $i) {
   	   echo "$i->userName $i->password<br>";
   	   if ($i->userName == $_POST["uname"] && $i->password == $_POST["pass"]) {
   	   	 $is_success = true;
   	   }
   	 }
   	 if ($is_success == false) {
   	   echo "Wrong username or password";
   	 }
   	 else {
   	 	setcookie("username", $_POST["uname"], time() + 3600);
   	 	header("Location: dashboard.php");
   	 }
   }
   else echo $has_err;
?>
