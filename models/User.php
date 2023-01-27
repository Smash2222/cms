<?php

namespace models;

use core\Core;
use core\Utils;

class User
{
    protected static $tableName = 'user';

    public static function addUser($login, $password, $lastname, $firstname)
    {
        \core\Core::getInstance()->db->insert(
            self::$tableName, [
                'login' => $login,
                'password' => $password,
                'lastname' => $lastname,
                'firstname' => $firstname
            ]
        );
    }

    public static function updateUser($id, $updatesArray)
    {
        $updatesArray = Utils::filterArray($updatesArray, ['lastname', 'firstname']);
        Core::getInstance()->db->update(self::$tableName, $updatesArray, [
            'id' => $id
        ]);
    }

    public static function isLoginExists($login)
    {
        $user = Core::getInstance()->db->select(self::$tableName, '*', [
            'login' => $login
        ]);
        return !empty($user);
    }

    public static function verifyUser($login, $password)
    {
        $user = Core::getInstance()->db->select(self::$tableName, '*', [
            'login' => $login,
            'password' => $password
        ]);
        return !empty($user);
    }

    public static function getUserByLoginAndPassword($login, $password)
    {
        $user = Core::getInstance()->db->select(self::$tableName, '*', [
            'login' => $login,
            'password' => $password
        ]);
        if (!empty($user)) {
            return $user[0];
        }
        return null;
    }

    public static function authenticateUser($user)
    {
        $_SESSION['user'] = $user;
    }

    public static function logoutUser()
    {
        unset($_SESSION['user']);
    }

    public static function isUserAuthenticated()
    {
        return isset($_SESSION['user']);
    }

    public static function getCurrentAuthenticatedUser()
    {
        return $_SESSION['user'];
    }

    public static function isAdmin()
    {
        $user = self::getCurrentAuthenticatedUser();
        return $user['access_level'] === 10;
    }
}
