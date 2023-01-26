<?php
/** @var string|null $error
 * @var array $model
 **/
\core\Core::getInstance()->pageParams['title'] = 'Log in';
?>
<h1>Log in</h1>
<?php if (!empty($error)) : ?>
<div class="message error">
    <?= $error ?>
</div>
<?php endif; ?>
<form method="post" action="">
    <div>
        <label for="login">Login:</label>
    </div>
    <div>
        <input type="email" name="login" id="login" value="<?= $model['login'] ?? '' ?>">
    </div>
    <div>
        <label for="password">Password:</label>
    </div>
    <div>
        <input type="password" name="password" id="password">
    </div>
    <div>
    <button>Log in</button>
    </div>
</form>
