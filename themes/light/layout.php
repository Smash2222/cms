<?php
/**
 * @var string $title
 * @var string $content
 * @var string $siteName
 */
use models\User;

if (User::isUserAuthenticated()) {
    $user = User::getCurrentAuthenticatedUser();
} else {
    $user = null;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $siteName ?> | <?= $title ?></title>
    <style>
        header, footer, main {
            padding: 10px;
            border: 1px solid black;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
<header>
    Header
    <?php
    if (!empty($user)) : ?>
        <?= $user['login'] ?> <a href="/user/logout">[Logout]</a>
    <?php
    endif; ?>
</header>
<main>
    <?= $content ?>
</main>
<footer>
    Footer
</footer>
</body>
</html>
