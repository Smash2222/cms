<?php
/** @var array $product */

?>

<h1 class="h3 mb-3 fw-normal text-center"><?= $product['name'] ?></h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <?php $filePath = 'files/product/' . $product['photo']; ?>
            <?php if (is_file($filePath)) : ?>
                <img src="/<?= $filePath ?>" class="img-thumbnail" alt="">
            <?php else: ?>
                <img src="/static/images/no-image.jpg" class="img-thumbnail" alt="">
            <?php endif; ?>
        </div>
        <div class="col-6">
            <div class="container">
                <div class="row mb-3 mt-3">
                    <div class="col-4">
                        Product price:
                    </div>
                    <div class="col-8">
                        <strong><?= $product['price'] ?> грн.</strong>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        Count:
                    </div>
                    <div class="col-8">
                        <strong><?= $product['count'] ?> шт.</strong>
                    </div>
                </div>
                <?php if (!empty($product['short_description'])) : ?>
                    <div class="row mb-3">
                        <div class="col-4">
                            Short description:
                        </div>
                        <div class="col-8">
                            <?= $product['short_description'] ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row mb-3">
                    <div class="col-4">
                        Buy:
                    </div>
                    <div class="col-3">
                        <div class="mb-2">
                            <input value="1" min="1" max="<?= $product['count'] ?>" type="number" name="count"
                                   id="count" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
