<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pet Shop</title>
</head>

<body>

<div class="featured">
	<h3>Login</h3>
	<form method="post" action="cek_login.php" class="login" >
		<table width="30%"  align="center">
			<tr>
				<td><label>ID</label></td>
				<td width="7">:</td>
				<td width="157">
					<input  name="id_user" type="text" value="" size="25" maxlength="25" placeholder="EXAMPLE">
				</td>
			</tr>
			
			<tr>
				<td width="108"><label>Password</label></td>
				<td>:</td>
				<td>
					<input name="password" type="password" value="" size="25" maxlength="25" placeholder="**************">
				</td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit" class="btn btn-primary">Login</button>
					<button type="reset">Reset</button>
				</td>
			</tr>
		</table>
  </form>
</div>

</body>
</html>
