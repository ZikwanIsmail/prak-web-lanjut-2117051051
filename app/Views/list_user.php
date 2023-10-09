<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?php $id = 1; ?>

<div class="container">
    <h1 class="mt-4 mb-4">Daftar Pengguna</h1>

    <a href="<?= base_url('user/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?= $id++ ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-info btn-sm">Detail</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('user/delete/' . $user['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?= $this->endsection() ?>
