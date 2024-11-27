<?php
require "Model/DBConnection.php";
require "Model/ProductDB.php";
require "Model/Product.php";
require "Controller/ProductController.php";

use \Controller\ProductController;

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
            <a class="navbar-brand" href="index.php">Quản lý sản phẩm</a>
        </div>

        <?php
        $controller = new ProductController();
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

        switch ($page) {
            case 'add':
                $controller->createProduct();
                break;
            case 'delete':
                $controller->deleteProduct();
                break;
            case 'update':
                $controller->updateProduct();
                break;
            case 'view':
                $controller->viewProduct();
                break;
            default:
                $controller->getProductList();
                break;
        }
        ?>
    </div>
</body>

</html>