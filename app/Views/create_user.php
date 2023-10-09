<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="mt-4 mb-4">Halaman Tambah Pengguna</h1>

    <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input class="form-control" name="foto" type="file" id="foto" style="width: 20%">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" name="nama" id="nama" style="width: 20%" value="<?= old('nama') ?>">
            <?= validation_show_error('nama'); ?>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" name="npm" id="npm" style="width: 20%" value="<?= old('npm') ?>">
            <?= validation_show_error('npm'); ?>
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-select">
                <?php foreach ($kelas as $item) { ?>
                    <option value="<?= $item['id'] ?>">
                        <?= $item['nama_kelas'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endsection() ?>
