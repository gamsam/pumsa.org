<?php

function validateSlider($slider)
{
    $errors = array();

    if (empty($slider['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($slider['link'])) {
        array_push($errors, 'Link is required');
    }

    if (empty($slider['body'])) {
        array_push($errors, 'Body is required');
    }

    $existingSlider = selectOne('sliders', ['title' => $slider['title']]);
    if ($existingSlider) {
        if (isset($slider['update-slider']) && $existingSlider['id'] != $slider['id']) {
            array_push($errors, 'Slider with same title already exists, please add a different slider');
        }

        if (isset($slider['add-slider'])) {
            array_push($errors, 'Slider with same title already exists, please add a different slider');
        }
    }

    return $errors;
}
