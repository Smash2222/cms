<?php
/** @var array $rows */

?>
<h2>Category List</h2>
<?php
if (\models\User::isAdmin()) : ?>
    <a href="/category/add" class="btn btn-primary">Add category</a>
<?php endif; ?>
<ul>
    <?php foreach ($rows as $row) : ?>
        <li><a href="/category/view/<?= $row['id'] ?>">
                <?= $row['name'] ?>
            </a></li>
    <?php endforeach; ?>
</ul>
