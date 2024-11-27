<?php

namespace Controller;

use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController
{

    public $ProductDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=product_management", "root", "");
        $this->ProductDB = new ProductDB($connection->connect());
    }

    public function getProductList()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['search'])) {
            $query = $_GET['search'];
            $products = $this->ProductDB->searchProduct($query);
        } else {
            $products = $this->ProductDB->getProductList();
        }
        include 'View/productList.php';
    }

    public function createProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'View/createProduct.php';
        } else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $provider = $_POST['provider'];
            $product = new Product($name, $price, $description, $provider);
            if ($this->ProductDB->createProduct($product)) {
                header('Location: index.php');
            }
        }
    }

    public function deleteProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->ProductDB->getProduct($id);
            include 'View/deleteProduct.php';
        } else {
            $product_id = $_POST['id'];
            if ($this->ProductDB->deleteProduct($product_id)) {
                header('Location: index.php');
            }
        }
    }

    public function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->ProductDB->getProduct($id);
            include 'View/updateProduct.php';
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $provider = $_POST['provider'];
            $product = new Product($name, $price, $description, $provider);
            $product->id = $id;
            if ($this->ProductDB->updateProduct($product)) {
                header('Location: index.php');
            }
        }
    }

    public function viewProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->ProductDB->getProduct($id);
            include 'View/viewProduct.php';
        }
    }
}
