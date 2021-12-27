<?= $this->extend('Portfolio/layouts/Layout'); ?>

<?= $this->section('content-section') ?>

<div class="row">
<div class="col-12 col-md-5 offset-md-3">
    <form action="/portfolio/register" method="post">
        <div class="form-control">
            <label for="">Name: </label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-control">
            <label for="">Email: </label>
            <input class="form-control" type="email" name="email">
        </div>

        <div class="form-control">
            <label for="">Role: </label>
            <input class="form-control" type="text" name="role">
        </div>

        <div class="form-control">
            <button class="btn btn-success">Register</button>
        </div>
    </form>
</div>
</div>


<?= $this->endSection(); ?>
