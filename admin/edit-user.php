<?php
	session_start();
	include '../config.php';
	if(isset($_POST['edit-user'])){
		$id 	      = $_POST['id'];
		$nama 		= $_POST['nama'];
		$username 	= $_POST['username'];
		$password 	= md5($_POST['password']);
		$no_tlp		= $_POST['no_tlp'];
		$level		= $_POST['level'];
		//echo $nama." ".$username." ".$password." ".$level;
		if(mysql_query("UPDATE user SET nama='$nama', username='$username', password='$password', no_tlp='$no_tlp', level='$level' WHERE id='$id' ")){
					echo "<script>alert('Berhasil Disimpan');</script>";
					header("location: data-user.php");
             }else{
                      echo "<script>alert('Gagal Edit ke Database');</script>";
               
			}
	}
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM user WHERE id='$id'");
		$data  = mysql_fetch_array($query);
		$nama 		= $data['nama'];
		$username 	= $data['username'];
		$password 	= md5($data['password']);
		$no_tlp		= $data['no_tlp'];
		$level		= $data['level'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | Peminjaman Barang Sekolah</title>
	<link rel="stylesheet" type="text/css" href="tambahan/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="tambahan/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="tambahan/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/register-style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body  style="background-image: url('') !important;">
	<div class="container">
		<div class='row'>
			<div class="col-md-4"></div>
			<div class="col-md-4 form-register-container">
				<h2 class="">Edit Akun</h2>
				<form class="card-body card-block" action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo$id;?>">
					<label>Nama</label>
					<input class="form-control" type="" name="nama" value="<?php echo $nama;?>"> 
					<label>Username</label>
					<input class="form-control" type="" name="username" value="<?php echo $username;?>">
					<label>Password</label>
					<input class="form-control" type="password" name="password" value="<?php echo $password;?>"> 
					<label>No Telepon</label>
					<input class="form-control" type="number_format" name="no_tlp" value="<?php echo $no_tlp;?>"> 
					<label>Kelas</label>
					<input class="form-control"type="" name="level" value="<?php echo $level;?>"> <br>
					<input type="checkbox" name="" required> Saya setuju dengan <a href="#">syarat dan ketentuan</a>.
					<button type="submit" name="edit-user" class="btn btn-success" style="margin-top: 20px;">  <i class="fa fa-check"></i> UPDATE</button>
					<a href="index.php" class="btn btn-danger" style="margin-top: 20px; float:right">BATAL</a>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="tambahan/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="tambahan/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="tambahan/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>