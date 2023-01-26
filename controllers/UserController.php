<?php

namespace controllers;

use core\Controller;
use core\Core;
use models\User;

class UserController extends Controller
{
    public function indexAction()
    {
    }

    public function registerAction()
    {
        if (User::isUserAuthenticated()) {
            $this->redirect('/');
        }
        if (Core::getInstance()->requestMethod === 'POST') {
            $errors = [];
            if (!filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)) {
                $errors['login'] = 'Error when entering email';
            }
            if (User::isLoginExists($_POST['login'])) {
                $errors['login'] = 'Login already taken';
            }
            if ($_POST['password'] !== $_POST['password2']) {
                $errors['password'] = 'Password dont match';
            }
            /* validation other fields... */

            if (count($errors) > 0) {
                $model = $_POST;
                return $this->render(null, [
                    'errors' => $errors,
                    'model' => $model
                ]);
            } else {
                User::addUser($_POST['login'], $_POST['password'], $_POST['lastname'], $_POST['firstname']);
                return $this->renderView('register-success');
            }
        } else {
            return $this->render();
        }
    }

    public function loginAction()
    {
        if (User::isUserAuthenticated()) {
            $this->redirect('/');
        }
        if (Core::getInstance()->requestMethod === 'POST') {
            $user = User::getUserByLoginAndPassword($_POST['login'], $_POST['password']);
            $error = null;
            if (empty($user)) {
                $error = 'Wrong login or password';
            } else {
                User::authenticateUser($user);
                $this->redirect('/');
            }
        }
        return $this->render(null, [
            'error' => $error ?? ''
        ]);
    }

    public function logoutAction()
    {
        User::logoutUser();
        $this->redirect('/user/login');
    }
}
