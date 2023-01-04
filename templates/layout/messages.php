<?php use App\Helpers\Session; ?>

<?php if (Session::exists('error')) : ?>
    <div class="alert alert-warning" role="alert">
        <?= Session::get('error') ?>
    </div>
<?php endif; ?>

<?php if (Session::exists('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= Session::get('success') ?>
    </div>
<?php endif; ?>
