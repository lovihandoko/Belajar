<?php
require_once ("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		<!--
		.style1 {color: #FFFFFF}
		-->
	</style>
</head>

<body>
	<h3>Tambah Admin</h3>
		<form action="" method="post">
		<table width="200" border="0">
		<tr>
			<td>username</td>
			<td><input name="username" type="text"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input name="password" type="password" id="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input name="submit" type="submit" value="Insert"></td>
		</tr>
		</table>
		</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
	$query="insert into admin (id_admin,username,password) values ('','".$_POST['username']."','".$_POST['password']."')";
	//eksekusi query
	$hasil=mysqli_query($con,$query) or die (mysql_error());
	?>

<script>
	alert("data sukses ditambahkan");
	window.location='dataadmin.php';
</script>
	<?php } ?>