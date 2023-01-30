<?php

/** @var string|null $error
 * @var array $model
 **/
\core\Core::getInstance()->pageParams['title'] = 'Log in';
?>
<h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
<main class="form-signin w-100 m-auto">
    <form action="" method="post">
        <?php if (!empty($error)) : ?>
            <div class="message error text-center mb-2">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <div class="form-floating">
            <input type="email" class="form-control" name="login" id="login" value="<?= $model['login'] ?? '' ?>"
                   placeholder="name@example.com">
            <label for="login">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    </form>
</main>
