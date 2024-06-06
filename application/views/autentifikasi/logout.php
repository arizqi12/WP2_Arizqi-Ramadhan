<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header">
                    Logout
                </div>
                <div class="card-body">
                    <p>Apakah Anda yakin ingin logout?</p>
                    <a href="<?= base_url('autentifikasi/logout'); ?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
