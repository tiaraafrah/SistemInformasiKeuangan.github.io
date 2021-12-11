<?php $this->load->view("admin/_partials/head.php")?>
<?php $this->load->view("admin/_partials/sidebar.php")?>
<?php $this->load->view("admin/_partials/navbar.php")?>
	<!-- Begin Page Content -->
		<div class="container-fluid">
	<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">
<?php $this->load->view("admin/_partials/breadcrumb.php")?>
			</h1>
		</div>
	<!-- Data Tables -->
	<div class="card mb-3">
			<div class="card-header">
				<a class="btn btn-dark" href="<?php echo site_url('admin/keluar/add') ?>"><i class="fas fa-plus"></i> Tambah </a>
			</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover" id="dataTable" width="100%"
			cellspacing="0">
			<thead>
			<tr>
			<th>No Pengeluaran</th>
			<th>Tanggal Pengeluaran</th>
			<th>Keterangan</th>
			<th>Jumlah Pengeluaran</th>
			<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($pengeluaran as $keluar): ?>
				<tr>
				<td width="150">
				<?php echo $keluar->no_pengeluaran ?>
				</td>
				<td>
				<?php echo $keluar->tgl_pengeluaran ?>
				</td>
				<td>
				<?php echo $keluar->keterangan ?>
				</td>
				<td>
				<?php echo $keluar->jumlah_pengeluaran ?>
				</td>
				<td>
				<a href="<?php echo site_url('admin/keluar/edit/'.$keluar->pengeluaran_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit </a>
				<a href="<?php echo site_url('admin/keluar/delete/'.$keluar
				->pengeluaran_id) ?>" class="btn btn-small
				text-danger"><i class="fas fa-trash"></i> Hapus </a>
				</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
</div>
	<!-- End of Main Content -->

	<!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Group Seven 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

<?php $this->load->view("admin/_partials/js.php")?>