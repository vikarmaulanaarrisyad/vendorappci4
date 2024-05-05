<?= $this->extend('layout/main') ?>

<?= $this->section('menu') ?>
<li class="has-submenu">
    <a href="<?= site_url('dashboard') ?>"><i class="mdi mdi-airplay"></i>Dashboard</a>
</li>
<li class="has-submenu">
    <a href="<?= site_url('vendor') ?>"><i class="mdi mdi-airplay"></i>Vendor</a>
</li>
<?= $this->endSection() ?>