<?php $this->load->view(
    "admin/_partials/head.php")?>

<?php $this->load->view(
    "admin/_partials/sidebar.php")?>

<?php $this->load->view(
    "admin/_partials/navbar.php")?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800">SISTEM INFORMASI KEUANGAN (FINANCIAL INFORMATION SYSTEM)</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
</div>
                    <!-- Content Row -->
                    <div class="col-xl-3 col-md-6 mb-4"></div>

                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <img src="<?php echo base_url('img/13.png'); ?>" width="740" height="342" align="center">
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

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda yakin ingin keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('admin/login/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

 <?php $this->load->view(
    "admin/_partials/js.php")?>