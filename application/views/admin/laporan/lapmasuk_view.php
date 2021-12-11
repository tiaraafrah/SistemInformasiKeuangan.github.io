<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Laporan Pendapatan</title>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" type="text/css">

</head>
<body>
	<div class="p-5">
    </div>
    <div class="container">

        <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">

        	<div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Filter By Tanggal</h1>
                  </div>

	<form action="<?php echo base_url();?>index.php/admin/Lapmasuk/filter/" method="POST" target='_blank'>

		<input type="hidden" name="nilaifilter" value="1">
		
		Tanggal Awal <br>
		<input type="date" name="tanggalawal" required=""><br>

		Tanggal Akhir <br>
		<input type="date" name="tanggalakhir" required=""><br>

		<br>
		<br>
		<input type="submit" class="btn btn-dark" value="Cetak" >

	</form>

</body>
</html>