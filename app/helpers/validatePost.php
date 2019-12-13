<?php

function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($post['author'])) {
        array_push($errors, 'Author is required');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post with same title already exists, please add a different post');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Post with same title already exists, please add a different post');
        }
    }

    return $errors;
}