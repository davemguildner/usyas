<?php
$author = "DMG Design & Development | Newington, CT";
$baseURL = "http://usyas.com/";
$regForm = "<form class='reg_form' action='register.php' method='POST'>
	<table>
		<tr>
			<td><input placeholder='Your Full Name' class='input_box' type='text' name='name'/></td>
			<td><input placeholder='New Username' class='input_box' type='text' name='uname' /></td>
		</tr>
		<tr>
			<td><input placeholder='Email' class='input_box' type='text' name='email' /></td>
			<td><input placeholder='Verify Email' class='input_box' type='text' name='email2' /></td>
		</tr>
		<tr>
			<td><input placeholder='Password' class='input_box' type='password' name='password' /></td>
			<td><input placeholder='Verify Password' class='input_box' type='password' name='pass2' /></td>
		</tr>
		<tr>
			<td><input placeholder='Your Primary Sport' class='input_box' type='text' name='sport1' /></td>
			<td><input class='RFreg_button' type='submit' value='Register' name='submit' /></td>
		</tr>
	</table>
</form>";
?>