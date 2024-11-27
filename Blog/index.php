<?php
include 'Controller/PostController.php';
include 'Model/Post.php';
include 'Model/PostDB.php';
include 'Model/DBConnection.php';

use Controller\PostController;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar navbar-default">
            <a class="navbar-brand" href="index.php">Quản lý bài đăng</a>
        </div>
        <?php

        $controller = new PostController();
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;

        switch ($page) {
            case 'add':
                $controller->add();
                break;
            case 'view':
                $controller->view();
                break;
            case 'delete':
                $controller->delete();
                break;
            case 'edit':
                $controller->edit();
                break;
            default:
                $controller->index();
                break;
        }
