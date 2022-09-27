<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form action="/update/<?= $id ?>" method="post">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat ?>">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi"><?= $deskripsi ?></textarea>
            </div>
        </div>

    </div>

    <button type="submit" class="btn btn-dark"><i class="fa fa-plus">Submit</button>
</form>

<?= $this->endSection() ?>