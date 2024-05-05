<?= $this->extend('templates/layout.php') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="alert alert-primary d-flex align-items-center" role="alert">

        <div>
            Selamat Datang, <b> <?= session()->get('username') ?></b> , anda login ke dalam aplikasi kami
        </div>
    </div>
</div>
<?= $this->endSection() ?>