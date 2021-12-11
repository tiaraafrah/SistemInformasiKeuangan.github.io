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
	<!-- /.container-fluid -->
		<div class="card mb-3">
			<div class="card-header">
				<a href="<?php echo site_url('admin/keluar/') ?>"><i class="fas fa-arrow-left"></i> Back </a>
			</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form_data">
						<input type="hidden" name="id" value="<?php echo $keluar->pengeluaran_id?>" />
						<div class="form-group">
						<label for="no_pengeluaran">No Pengeluaran*</label>
						<input class="form-control <?php echo form_error('no_pengeluaran') ? 'is-invalid':'' ?>" type="number" name="no_pengeluaran" value="<?php echo $keluar->no_pengeluaran ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('no_pengeluaran') ?>
							</div>
				</div>
						<div class="form-group">
						<label for="tgl_pengeluaran">Tanggal Pengeluaran*</label>
						<input class="form-control <?php echo form_error('tgl_pengeluaran') ? 'is-invalid':'' ?>" type="date" name="tgl_pengeluaran" value="<?php echo $keluar->tgl_pengeluaran ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('tgl_pengeluaran') ?>
							</div>
				</div>
						<div class="form-group">
						<label for="keterangan">Keterangan*</label>
						<input class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" type="text" name="keterangan" value="<?php echo $keluar->keterangan ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('keterangan') ?>
							</div>
				</div>
						<div class="form-group">
						<label for="jumlah_pengeluaran">Jumlah Pengeluaran*</label>
						<input class="form-control <?php echo form_error('jumlah_pengeluaran') ? 'is-invalid':'' ?>" type="number" name="jumlah_pengeluaran" value="<?php echo $keluar->jumlah_pengeluaran ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('jumlah_pengeluaran') ?>
							</div>
				</div>
					<input class="btn btn-success" type="submit"
					name="btn" value="Save" />
				</form>
		</div>
	</div>
	<!-- /.container-fluid -->
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
