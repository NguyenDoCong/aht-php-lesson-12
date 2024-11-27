<?php

namespace Model;

class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getProductList()
    {
        $sql = "SELECT * FROM products";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['price'], $row['description'], $row['provider']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }

    public function createProduct($product)
    {
        $sql = "INSERT INTO `products`(`name`, `price`, `description`, `provider`) 
        VALUES (:name,:price,:description,:provider)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('name', $product->name);
        $statement->bindParam('price', $product->price);
        $statement->bindParam('description', $product->description);
        $statement->bindParam('provider', $product->provider);
        if ($statement->execute()) {
            return true;
        }
        return false;
    }

    public function updateProduct($product)
    {
        $sql = "UPDATE `products` SET `name`=:name,`price`=:price,`description`=:description,`provider`=:provider WHERE `id`=:id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('id', $product->id);
        $statement->bindParam('name', $product->name);
        $statement->bindParam('price', $product->price);
        $statement->bindParam('description', $product->description);
        $statement->bindParam('provider', $product->provider);
        if ($statement->execute()) {
            return true;
        }
        return false;
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM `products` WHERE `id`=:id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('id', $id);
        if ($statement->execute()) {
            return true;
        }
        return false;
    }
    public function getProduct($id)
    {
        $sql = "SELECT * FROM `products` WHERE `id`=:id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('id', $id);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }
    public function searchProduct($needle)
    {
        $sql = "SELECT * FROM `products` WHERE `name` LIKE :keyword";
        $statement = $this->connection->prepare($sql);
        $keyword = "%" . $needle . "%";
        $statement->bindParam('keyword', $keyword);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['price'], $row['description'], $row['provider']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }
}
