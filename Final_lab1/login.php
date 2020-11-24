<?php include_once "php_code/login_validation.php" ;?>
<html>
<head>
    <title>KENAKATA SUPERSHOP</title>
</head>
<body>	
	    <center><h1>Login</h1></center>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td align="left" style="font-size: 30px;"><span style="color:white;">User Name:</span></td>
                        <td align="left"><input type="text" placeholder="User Name..." value="<?php echo $uname;?>" name="uname"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_uname;echo $err_msg;?></span></td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 30px;"><span style="color:white;">Password:</span></td>
                        <td align="left"><input type="password" placeholder="Password..." value="<?php echo $pass;?>" name="pass"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
					    <td style="font-size: 22px;"><a href="registration.php"><u>Create an account?</u></a></td>
                        <td  align="right" >
                            <input type="submit" name="login" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
	</header>
</body>

</html>