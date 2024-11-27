<?php

namespace Model;

use Model\Post;

class PostDB
{
    public $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function index()
    {
        $sql = "SELECT * FROM `posts`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['teaser'], $row['content']);
            $post->id = $row['id'];
            $post->created = $row['created'];
            $posts[] = $post;
        }
        return $posts;
    }

    public function add($post)
    {
        $sql = "INSERT INTO `posts`(`title`, `teaser`, `content`, `created`) 
        VALUES (:title,:teaser,:content,:created)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('title', $post->title);
        $statement->bindParam('teaser', $post->teaser);
        $statement->bindParam('content', $post->content);
        $statement->bindParam('created', $post->created);

        if ($statement->execute()) {
            return true;
        }
        return false;
    }

    public function edit($post)
    {
        $sql = "UPDATE `posts` SET `title`=:title,`teaser`=:teaser,`content`=:content WHERE `id`=:id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('id', $post->id);
        $statement->bindParam('title', $post->title);
        $statement->bindParam('teaser', $post->teaser);
        $statement->bindParam('content', $post->content);
        if ($statement->execute()) {
            return true;
        }
        return false;
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `posts` WHERE `id`=:id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('id', $id);
        if ($statement->execute()) {
            return true;
        }
        return false;
    }
    public function view($id)
    {
        $sql = "SELECT * FROM `posts` WHERE `id`=:id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('id', $id);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }
}
