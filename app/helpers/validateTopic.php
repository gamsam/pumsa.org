<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Topic name is required');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic) {
        array_push($errors, 'Topic already exists, please add a different topic');
    }

    return $errors;
}