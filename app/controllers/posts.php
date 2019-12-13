<?php

include_once(ROOT_PATH . '/app/database/db.php');
include_once(ROOT_PATH . '/app/helpers/validatePost.php');

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$title = '';
$body = '';
$topic_id = '';
$published = '';


if (isset($_POST['add-post'])) {
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '-' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/img/blog_img/' . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, 'Failed to upload image');
        }

    } else {
        array_push($errors, 'Please upload a post image');
    }

    if (count($errors) === 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        // To avoid cross-site scripting and remove html from body of posts
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = create($table, $_POST);
        $_SESSION['message'] = 'Post created successfully';
        $_SESSION['type'] = 'alert-success';
        header('location: ' . BASE_URL . '/admin/posts/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}