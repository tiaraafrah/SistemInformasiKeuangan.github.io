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
				<a href="<?php echo site_url('admin/profil/edit') ?>"><i class="fas fa-arrow-left"></i> Back </a>
			</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form_data">
						<input type="hidden" name="id" value="<?php echo $profil->user_id?>" />
						<div class="form-group">
						<label for="email">Email*</label>
						<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="text" name="email" value="<?php echo $profil->email ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('email') ?>
							</div>
				</div>
						<div class="form-group">
						<label for="nama_lengkap">Nama Lengkap*</label>
						<input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>" type="text" name="nama_lengkap" value="<?php echo $profil->nama_lengkap ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('nama_lengkap') ?>
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
                        <span>Copyright &copy; Kelompok 7 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

<?php $this->load->view("admin/_partials/js.php")?>
