<?php

/** @var array $errors
 * @var array $model
 **/
\core\Core::getInstance()->pageParams['title'] = 'Sign up';
?>
<h1 class="h3 mb-3 fw-normal text-center">Registration new user</h1>
<main class="form-signin w-100 m-auto">
    <form method="post" action="">
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="email" class="form-control" name="login" id="login" value="<?= $model['login'] ?? '' ?>"
                   aria-describedby="emailHelp">
            <?php
            if (!empty($errors['login'])) : ?>
                <div id="emailHelp" class="form-text"><?= $errors['login'] ?></div>
            <?php
            endif; ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password"
                   value="<?= $model['password'] ?? '' ?>" aria-describedby="passwordHelp">
            <?php
            if (!empty($errors['password'])) : ?>
                <div id="passwordHelp" class="form-text"><?= $errors['password'] ?></div>
            <?php
            endif; ?>
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Password confirmation</label>
            <input type="password" class="form-control" name="password2" id="password2"
                   value="<?= $model['password2'] ?? '' ?>" aria-describedby="password2Help">
            <?php
            if (!empty($errors['password2'])) : ?>
                <div id="password2Help" class="form-text"><?= $errors['password2'] ?></div>
            <?php
            endif; ?>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastname"
                   value="<?= $model['lastname'] ?? '' ?>" aria-describedby="lastnameHelp">
            <?php
            if (!empty($errors['lastname'])) : ?>
                <div id="lastnameHelp" class="form-text"><?= $errors['lastname'] ?></div>
            <?php
            endif; ?>
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstname"
                   value="<?= $model['firstname'] ?? '' ?>" aria-describedby="firstnameHelp">
            <?php
            if (!empty($errors['firstname'])) : ?>
                <div id="firstnameHelp" class="form-text"><?= $errors['firstname'] ?></div>
            <?php
            endif; ?>
        </div>
        <div>
            <button class="btn btn-primary">Sign up</button>
        </div>
    </form>
</main>
