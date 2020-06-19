<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<form action="" method="POST">
	<div class="kotak">
		<div class="kepala">
			<h2><center>LOGIN</center></h2>
		</div>
		<div class="form">
			<table>
				<tr>
					<th>User ID</th>
					<td>
						<img class= "id" src="layout/assets/images/id.png" width="16px">
						<input type="text" name="i_username" placeholder="UserID">
					</td>
				</tr>

				<tr>
					<th>Password</th>
					<td>
						<img class="pass" src="layout/assets/images/pass.png" width="16px">
						<input type="text" name="i_password" placeholder="Password">
					</td>
				</tr>

				<tr>
					<th></th>
					<td>
						<input type="submit" name="login" value="Login">
						<input type="submit" name="regis" value="Registrasi">
					</td>
				</tr>
<?php
include "koneksi.php";
if(isset($_POST['login'])){
	$sql = "SELECT *FROM tb_user WHERE username = :user_name AND :user_password";
	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":user_name", $_POST['i_username']);
	$stmt->bindParam(":user_password", $_POST['i_password']);
	$stmt->execute();
	$user = $_POST['i_username'];

	if($stmt->rowcount() > 0){
		$_SESSION ["user"] = $user;
		header("location:index.php?name=$user");
		exit;
	}
}
if(isset($_POST['regis'])){
	header("location:registrasi.php")
}
?>