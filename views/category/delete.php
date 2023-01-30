<?php
/** @var array $category */

?>

<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Delete category "<?= $category['name'] ?>?"</h4>
    <p>After deleting a category, all products in that category will be moved to the default <b>"Undefined"</b> category
    </p>
    <hr>
    <p class="mb-0">
        <a href="/category/delete/<?= $category['id'] ?>/yes" class="btn btn-danger">Delete</a>
        <a href="/category/" class="btn btn-light">Cancel</a>
    </p>
</div>
