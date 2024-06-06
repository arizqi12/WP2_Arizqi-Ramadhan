<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu -->

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Kategori Buku</span>
        </a>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Anggota</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toogled" id="accordionSidebar">

    </div>

</ul>
<!-- End of Sidebar -->
 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script>
        $(document).ready(function () {
            $('#sidebarToggle').on('click', function () {
                $('.sidebar').toggleClass('toggled');
            });
        });
    </script>
</body>
</html>