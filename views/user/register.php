<?php
/** @var array $errors
 * @var array $model
 **/
\core\Core::getInstance()->pageParams['title'] = 'Sign up';
?>
<h1>Registration new user</h1>
<form method="post" action="">
    <div>
        <label for="login">Login:</label>
    </div>
    <div>
        <input type="email" name="login" id="login" value="<?= $model['login'] ?? '' ?>">
        <?php if (!empty($errors['login'])) : ?>
        <span class="error"><?= $errors['login'] ?></span>
         <?php endif; ?>
    </div>
    <div>
        <label for="password">Password:</label>
    </div>
    <div>
        <input type="password" name="password" id="password">
        <?php if (!empty($errors['password'])) : ?>
            <span class="error"><?= $errors['password'] ?></span>
        <?php endif; ?>
    </div>
    <div>
        <label for="password2">Password confirm:</label>
    </div>
    <div>
        <input type="password" name="password2" id="password2">
        <?php if (!empty($errors['password2'])) : ?>
            <span class="error"><?= $errors['password2'] ?></span>
        <?php endif; ?>
    </div>
    <div>
        <label for="lastname">Last name:</label>
    </div>
    <div>
        <input type="text" name="lastname" id="lastname" value="<?= $model['lastname'] ?? '' ?>">
        <?php if (!empty($errors['lastname'])) : ?>
            <span class="error"><?= $errors['lastname'] ?></span>
        <?php endif; ?>
    </div>
    <div>
        <label for="firstname">First name:</label>
    </div>
    <div>
        <input type="text" name="firstname" id="firstname" value="<?= $model['firstname'] ?? '' ?>">
        <?php if (!empty($errors['firstname'])) : ?>
            <span class="error"><?= $errors['firstname'] ?></span>
        <?php endif; ?>
    </div>
    <div>
        <button>Sign up</button>
    </div>
</form>
