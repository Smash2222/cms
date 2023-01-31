<?php

?>
<h1 class="h3 mb-3 fw-normal text-center">Product List</h1>
<?php if (\models\User::isAdmin()) : ?>
    <div class="mb-3">
        <a href="/product/add" class="btn btn-success">Add product</a>
    </div>
<?php endif; ?>
