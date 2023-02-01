<?php

/** @var array $basket */
?>
<h1>Basket</h1>

<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Product name</th>
        <th>Price(for 1)</th>
        <th>Count</th>
        <th>Total cost</th>
    </tr>
    </thead>
    <?php
    $index = 1;
    foreach ($basket['products'] as $row) : ?>
        <tr>
            <td><?= $index ?></td>
            <td><?= $row['product']['name'] ?></td>
            <td><?= $row['product']['price'] ?> грн.</td>
            <td><input type="number" value="<?= $row['count'] ?>" class="form-control"></td>
            <td><?= $row['product']['price'] * $row['count'] ?> грн.</td>
        </tr>
        <?php $index++;
    endforeach; ?>
    <tfoot>
    <tr>
        <th></th>
        <th>Total</th>
        <th><?= $basket['total_price'] ?> грн.</th>
    </tr>
    </tfoot>
</table>
