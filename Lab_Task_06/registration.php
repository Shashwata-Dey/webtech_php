<?php
   require "validate_registration.php";
?>

<html>
<head>
	<title>Registration</title>
</head>
<body>
    <form action="" method="post" style="width: 700px;">
	    <fieldset style="background-color: lightgray;">
	    	<table align="center">
	    		<h1 align="center">Welcome to Registration.</h1>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Full Name:
	    			</td>
	    			<td>
	    				<input type="text" name="fname">
	    				<span> <?php echo "$err_name"; ?> </span>
	    			</td>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				User Name:
	    			</td>
	    			<td>
	    				<input type="text" name="uname">
	    				<span> <?php echo "$err_uname"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Password:
	    			</td>
	    			<td>
	    				<input type="Password" name="pass">
	    				<span> <?php echo "$err_pass"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Confirm Password:
	    			</td>
	    			<td>
	    				<input type="Password" name="cpass">
	    				<span> <?php echo "$err_cpass"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Gender:
	    			</td>
                    <td>
                    	<input type="radio" name="gender">Male &nbsp
                    	<input type="radio" name="gender">Female
                    	<span> <?php echo "&nbsp &nbsp &nbsp $err_gender"; ?> </span>
                    </td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				E-mail Address:
	    			</td>
	    			<td>
	    				<input type="text" name="email">
	    				<span> <?php echo "$errMail"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="center">
	    				Contact No..
	    			</td>
	    			<td>
	    				<input type="text" name="phn">
	    				<span> <?php echo "$err_contact"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				City:
	    			</td>
	    			<td>
	    				<select name="city">
	    					<option>Noakhali</option>
	    					<option>Dhaka</option>
	    					<option>Barishal</option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td colspan="2" align="center">
	    				<input type="submit" name="ok" value="OK"> 
	    			</td>
	    		</tr>
	    	</table>
	    </fieldset>
    </form>
</body>
</html>