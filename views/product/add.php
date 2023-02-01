<?php
/** @var array $model */
/** @var array $errors */
/** @var array $categories */
/** @var int|null $category_id */
?>
<h2>Adding product</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Product name</label>
        <input type="text" class="form-control" id="name" name="name">
        <?php if (!empty($errors['name'])) : ?>
            <div class="form-text text-danger"><?= $errors['name'] ?></div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Choose category for product</label>
        <select class="form-control" id="category_id" name="category_id">
            <?php foreach ($categories as $category) : ?>
            <option <?php if ($category['id'] == $category_id) echo 'selected'?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <?php if (!empty($errors['category_id'])) : ?>
            <div class="form-text text-danger"><?= $errors['category_id'] ?></div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Product price</label>
        <input type="number" class="form-control" id="price" name="price">
        <?php if (!empty($errors['price'])) : ?>
            <div class="form-text text-danger"><?= $errors['price'] ?></div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Product count</label>
        <input type="count" class="form-control" id="count" name="count">
        <?php if (!empty($errors['count'])) : ?>
            <div class="form-text text-danger"><?= $errors['count'] ?></div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Short description product</label>
        <textarea class="ckeditor form-control" name="short_description" id="short_description"></textarea>
        <?php if (!empty($errors['short_description'])) : ?>
            <div class="form-text text-danger"><?= $errors['short_description'] ?></div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Full description product</label>
        <textarea class="ckeditor form-control" name="description" id="description"></textarea>
        <?php if (!empty($errors['description'])) : ?>
            <div class="form-text text-danger"><?= $errors['description'] ?></div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Display the product?</label>
        <select class="form-control" id="visible" name="visible">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <?php if (!empty($errors['visible'])) : ?>
            <div class="form-text text-danger"><?= $errors['visible'] ?></div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="file" class="form-label">Photos for product</label>
        <input multiple type="file" class="form-control" id="file" name="file" accept="image/jpeg">
    </div>
    <div>
        <button class="btn btn-primary">Add</button>
    </div>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
<script>
    let editors = document.querySelectorAll('.ckeditor');
    for (let editor of editors)
    ClassicEditor
        .create(editor)
        .catch( error => {
            console.error( error );
        } );
</script>
