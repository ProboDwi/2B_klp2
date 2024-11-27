<!-- app/views/orders/create.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Pesanan Baru</div>
                    <div class="card-body">
                        <form action="/orders/store" method="POST">

                            <div class="form-group">
                                <label for="tanaman_yang_dipesan">Tanaman Yang Dipesan</label>
                                <input type="text" name="tanaman_yang_dipesan" id="tanaman_yang_dipesan" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pembeli">Pembeli</label>
                                <input type="text" name="pembeli" id="pembeli" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="status_pesanan">Status Pesanan</label>
                                <input type="text" name="status_pesanan" id="status_pesanan" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                            <a class="btn btn-primary" href="/orders/index" role="button">KEMBALI</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once '../public/library/footer.php'; ?>
