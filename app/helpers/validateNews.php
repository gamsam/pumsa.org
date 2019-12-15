<?php

function validateNews($news)
{
    $errors = array();

    if (empty($news['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($news['body'])) {
        array_push($errors, 'Body is required');
    }

    $existingNews = selectOne('news', ['title' => $news['title']]);
    if ($existingNews) {
        if (isset($news['update-news']) && $existingNews['id'] != $news['id']) {
            array_push($errors, 'News with same title already exists, please add a different news');
        }

        if (isset($news['add-news'])) {
            array_push($errors, 'News with same title already exists, please add a different news');
        }
    }

    return $errors;
}
