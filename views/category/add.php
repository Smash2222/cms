<?php
/** @var array $model */
/** @var array $errors */
?>
<h2>Adding category</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Category name</label>
        <input type="text" class="form-control" id="name" name="name">
        <?php if (!empty($errors['name'])) : ?>
            <div class="form-text text-danger"><?= $errors['name'] ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Add photo for category</label>
        <input type="file" class="form-control" id="file" name="file" accept="image/jpeg">
    </div>
    <div>
        <button class="btn btn-primary">Add</button>
    </div>
</form>
