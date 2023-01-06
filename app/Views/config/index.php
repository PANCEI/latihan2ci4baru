<?= $this->extend("layouts/index"); ?>\
<?= $this->section("content"); ?>
<!-- Custom Styled Validation -->
<form class="row g-3 needs-validation" novalidate action="/config/update" method="POST">

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alart alert-primary" role="alert">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <div class="col-md-6">
        <label for="appname" class="form-label">Aplikasi Name </label>
        <input type="text" class="form-control <?= $validation->hasError('appname') ? 'is-invalid' : ''; ?>" id="appname" name="appname" value="<?= $config['appname'] ?>">
        <!-- <div class="valid-feedback">
            Sila
        </div> -->
        <div class="invalid-feedback">
            <?= $validation->getError('appname') ? $validation->getError('appname') : ""; ?>
        </div>
    </div>
    <div class="col-md-6">
        <label for="copyright" class="form-label">Copyright </label>
        <input type="text" class="form-control <?= $validation->hasError('copyright') ? 'is-invalid' : ''; ?>" id="copyright" name="copyright" value="<?= $config['copyright'] ?>">
        <!-- <div class="valid-feedback">
            Sila
        </div> -->
        <div class="invalid-feedback">
            <?= $validation->getError('copyright') ? $validation->getError('copyright') : ""; ?>
        </div>
    </div>
    <!-- <div class="col-md-6">
        <label for="copyright" class="form-label">Copyrigth </label>
        <input type="text" class="form-control  <?= $validation->hasError('copyright') ? 'is-invalid' : ''; ?>" id="copyright" name="copyright"  value="<?= $config['copyright'] ?>">
         <div class="valid-feedback">
            Sila
        </div> 
        <div class="invalid-feedback">
            <?= $validation->getError('copyright') ? $validation->getError("copyright") : ""; ?>
        </div>
    </div> -->
    <div class="col-md-6">
        <label for="Keywords" class="form-label">Keywords </label>
        <input type="text" class="form-control <?= $validation->hasError('Keywords') ? "is-invalid" : ''; ?>" id="Keywords" name="Keywords"  value="<?= $config['Keywords'] ?>">
        <!-- <div class="valid-feedback">
            Sila
        </div> -->
        <div class="invalid-feedback">
            <?= $validation->getError('Keywords') ? $validation->getError('Keywords') : ''; ?>
        </div>
    </div>
    <div class="col-md-6">
        <label for="author" class="form-label">Author </label>
        <input type="text" class="form-control <?= $validation->hasError("author")?"is-invalid":''; ?> " id="author" name="author"  value="<?= $config['author'] ?>">
        <!-- <div class="valid-feedback">
            Sila
        </div> -->
        <div class="invalid-feedback">
            <?= $validation->getError('author')?$validation->getError('author'):''; ?>
        </div>
    </div>
    <div class="col-md-12">
        <label for="description" class="form-label">Description </label>
        <textarea type="text" class="form-control <?= $validation->hasError('description')?"is-invalid":'';  ?>" id="description" name="description" cols="30" rows="9" ><?= $config['description'] ?></textarea>
        <!-- <div class="valid-feedback">
            Sila
        </div> -->
        <div class="invalid-feedback">
            <?= $validation->getError('description')?$validation->getError('description'):''; ?>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Update</button>
    </div>
</form><!-- End Custom Styled Validation -->
<?= $this->endSection("content"); ?>
<?= $this->section("modal"); ?>
<?= $this->endSection("modal"); ?>
<?= $this->section("scripth"); ?>
<script>
Swal.fire('Any fool can use a computer')
</script>
<?= $this->endSection("scripth"); ?>