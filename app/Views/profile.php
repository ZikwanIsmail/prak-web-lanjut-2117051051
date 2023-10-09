<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <br>
                <img src="<?= $user['foto'] ?? base_url('/assets/img/11.jpg') ?>" alt="..." style="width: 150px; border-radius: 50%;"><br><br>

                <div class="badge bg-primary text-wrap">
                    <?= $user['nama'] ?>
                </div>
                <br>

                <div class="badge bg-primary text-wrap">
                    <?= $user['nama_kelas'] ?>
                </div>
                <br>

                <div class="badge bg-primary text-wrap">
                    <?= $user['npm'] ?>
                </div>
                <br>
            </center>
        </div>
    </div>
</div>

<?= $this->endsection() ?>
