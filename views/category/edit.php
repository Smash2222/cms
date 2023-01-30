<?php
/** @var array $category */
?>
<h2>Edit category</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Category name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $category['name'] ?>">
    </div>
    <div class="col-3">
    <?php $filePath = 'files/category/' . $category['photo']; ?>
    <?php if(is_file($filePath)) : ?>
        <img class="img-thumbnail card-img-top" src="/<?= $filePath ?>"  alt="">
    <?php else: ?>
        <img class="img-thumbnail card-img-top" src="/static/images/no-image.jpg"  alt="">
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Photo category (edit)</label>
        <input type="file" class="form-control" id="file" name="file" accept="image/jpeg">
    </div>
    <div>
        <button class="btn btn-primary">Save</button>
    </div>
</form>
