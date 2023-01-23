<?php

namespace controllers;

class MainController
{
    public function indexAction()
    {
        echo 'Main page';
    }

    public function errorAction($code)
    {
        switch ($code) {
            case 404:
                echo 'Error 404. Not found';
                break;
        }
    }
}
