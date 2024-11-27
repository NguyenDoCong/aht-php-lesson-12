<?php

namespace Controller;

use Model\PostDB;
use Model\DBConnection;
use Model\Post;

class PostController
{
    public $postDB;
    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=blog", "root", "");
        $this->postDB = new PostDB($connection->connect());
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $posts = $this->postDB->index();
        }
        include 'View/list.php';
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'View/add.php';
        } else {
            $title = $_POST['title'];
            $teaser = $_POST["teaser"];
            $content = $_POST["content"];
            $date = $_POST["created"];
            $created = date("Y-m-d H:i:s", strtotime($date));
            $post = new Post($title, $teaser, $content);
            $post->created = $created;
            if ($this->postDB->add($post)) {
                header("Location: index.php");
            }
        }
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $post = $this->postDB->view($id);
            include 'View/edit.php';
        } else {
            $title = $_POST['title'];
            $teaser = $_POST["teaser"];
            $content = $_POST["content"];
            $post = new Post($title, $teaser, $content);
            $post->id = $_POST['id'];
            if ($this->postDB->edit($post)) {
                header("Location: index.php");
            }
        }
    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $post = $this->postDB->view($id);
            include 'View/delete.php';
        } else {
            $id = $_POST['id'];
            if ($this->postDB->delete($id)) {
                header("Location: index.php");
            }
        }
    }
    public function view()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $post = $this->postDB->view($id);
            include 'View/view.php';
        }
    }
}
