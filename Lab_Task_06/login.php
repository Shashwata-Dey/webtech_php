<?php include "validate_login.php" ?>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <form action="" method="post" style="width: 300px";>
    	<fieldset style="background-color: lightgray;">
    		<table align="center">
    			<h1 align="center">Login</h1>
    			<tr style="line-height: 50px;">
    				<td>
    					Username:
    				</td>
    			</tr>
    			<tr style="line-height: 50px;">
    				<td>
    					<input type="text" name="uname">
    				</td>
    			</tr>
    			<tr style="line-height: 50px;">
    				<td>
    					Password:
    				</td>
    			</tr>
    			<tr style="line-height: 50px;">
    				<td>
    					<input type="Password" name="pass">
    					<input type="submit" name="login" value="Login" style="background-color: green; color: white";>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<a href="reg.php">Create account...?</a>
    				</td>
    			</tr>
    		</table>
    	</fieldset>
    </form>
</body>
</html>