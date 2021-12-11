<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Cetak Laporan Pendapatan</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sb-admin-2.min.css">

</head>
<body>

	<div class="card mb-3">
	<div class="card-header"> <a class="btn btn-dark" href="<?php echo site_url('admin') ?>"> Back </a> 
	</div>

	<H2 align="center">Laporan Pendapatan</H2>
	<H6><?php echo $subtitle ?></H6>

	<br>
	<hr>

	<table class="table table-hover" border="1" align="center">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Keterangan</th>
				<th>Jumlah</th>
				<th>Total Pendapatan</th>
			</tr>
		
		<tbody>
			<?php $no=1;

			$total = 0; foreach($datafilter as $row):
			$total += $row->jumlah_pendapatan; ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->tgl_pendapatan; ?></td>
				<td><?php echo $row->keterangan; ?></td>
				<td><?php echo $row->jumlah_pendapatan; ?></td>
				<td><?php echo $total;?> </td>
				
			</tr>
			<?php endforeach ?>
				
		</tbody>
		</thead>
	</table>

</body>
</html>
