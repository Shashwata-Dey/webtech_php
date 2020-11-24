<?php include_once "php_code/registration_validation.php" ;?>
<html>
<head>
    <title>KENAKATA SUPERSHOP</title>
</head>
<body>	
	    <center>
            <h1>Welcome to Registration</h1>
        </center>
        <center>
            <form action="" method="POST">
                <table>
                   
                    <tr>
                        <td align="left" style="font-size: 30px;"><span style="color:white;">User Name:</span></td>
                        <td align="left"><input type="text" placeholder="User name..." value="<?php echo $uname;?>" name="uname"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_uname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">Password:</span></td>
                        <td align="left"><input type="password" placeholder="Password..." value="<?php echo $pass;?>" name="pass"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_pass;?></span></td>
                    </tr>
                   
                    <tr>
                        <td colspan="3" align="right">
                            <input type="submit" name="ok" value="REGISTER">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
	</header>
</body>

</html>