<?= $this->extend('Portfolio/layouts/Layout'); ?>

<?= $this->section('content-section') ?>

<div class="row">
    <h1>Users registered as of now</h1>
    <p>Name: <?= $name ?></p><br>
    <p>Email: <?= $email ?></p><br>
    <p>Role: <?= $role?></p><br>
</div


<?= $this->endSection(); ?>