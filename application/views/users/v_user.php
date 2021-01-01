<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">    
    <title> FORM DATA USER</title>

</head>
<body>
<div class="container">

    <h2> Tambah User </h2>
    <hr>
    <form action ="<?= site_url('user/proses_tambah') ?>" method="post">

    <h5>Input Data</h5>
<form>
<div class="form-group">
		<label for="id">ID</label>
		<input type="text" name="nim" class="form-control" placeholder="Masukan ID ..">
    </div>
    
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control" placeholder="Masukan username..">
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Masukan Password..">
	</div>

    <div class="form-group">
		<label for="nama_lengkap">NamaLengkap</label>
		<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap..">
	</div>
 
	<div class="form-group">
		<label for="hak_akses">Hak Akses</label>
		<input type="text" name="hak_akses" class="form-control" placeholder="Masukan Hak Akses...">
    </div>
    
    
     <input type ="submit" name="submit" value="Simpan" 
     class="btn btn-primary">
     
     <a href="<?= site_url('user/view_index')?>"
     class="btn btn-warning">Batal</a>




    </from>
</div>


</body>
</html>