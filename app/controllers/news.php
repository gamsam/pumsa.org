<?php

include_once(ROOT_PATH . '/app/database/db.php');
include_once(ROOT_PATH . '/app/helpers/validateNews.php');
include_once(ROOT_PATH . '/app/helpers/middleware.php');

$table = 'news';

$newss = selectAll($table);

$errors = array();
$id = '';
$title = '';
$body = '';
$published = '';


if (isset($_GET['id'])) {
    $news = selectOne($table, ['id' => $_GET['id']]);
    $id = $news['id'];
    $title = $news['title'];
    $body = $news['body'];
    $published = $news['published'];
}


if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'News deleted successfully';
    $_SESSION['type'] = 'alert-success';
    header('location: ' . BASE_URL . '/admin/news/index.php');
    exit();
}


if (isset($_GET['published']) && isset($_GET['n_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $n_id = $_GET['n_id'];
    $count = update($table, $n_id, ['published' => $published]);
    $_SESSION['message'] = 'Publish status changed!';
    $_SESSION['type'] = 'alert-success';
    header('location: ' . BASE_URL . '/admin/news/index.php');
    exit();
}


if (isset($_POST['add-news'])) {
    adminOnly();
    $errors = validateNews($_POST);

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
        array_push($errors, 'Please upload an Image');
    }

    if (count($errors) === 0) {
        unset($_POST['add-news']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        // To avoid cross-site scripting and remove html from body of news
        $_POST['body'] = htmlentities($_POST['body']);

        $news_id = create($table, $_POST);
        $_SESSION['message'] = 'News created successfully';
        $_SESSION['type'] = 'alert-success';
        header('location: ' . BASE_URL . '/admin/news/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if (isset($_POST['update-news'])) {
    adminOnly();
    $errors = validateNews($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '-' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/img/news_img/' . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, 'Failed to upload image');
        }
    } else {
        array_push($errors, 'Please upload an Image');
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-news'], $_POST['id']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        // To avoid cross-site scripting and remove html from body of news
        $_POST['body'] = htmlentities($_POST['body']);

        $news_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'News updated successfully';
        $_SESSION['type'] = 'alert-success';
        header('location: ' . BASE_URL . '/admin/news/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}
