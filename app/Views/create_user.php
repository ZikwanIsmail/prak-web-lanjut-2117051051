<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Create User</title>
    <style>
        body {
            background-color: #f7f7f7;
        }

        .container {
            margin-top: 50px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 50%;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Halaman Create User</h2>
                <?php $validation = \Config\Services::validation();?>

                <form action="<?= base_url('/user/store')?>" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" name="nama" id="nama" value="<?= old('nama') ?>">
                        <div class="error-message"><?= validation_show_error('nama'); ?></div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM:</label>
                        <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" name="npm" id="npm" value="<?= old('npm') ?>">
                        <div class="error-message"><?= validation_show_error('npm'); ?></div>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas:</label>
                        <select class="form-select" name="kelas" id="kelas">
                            <?php foreach ($kelas as $item): ?>
                                <option value="<?= $item['id']?>"><?= $item['nama_kelas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
