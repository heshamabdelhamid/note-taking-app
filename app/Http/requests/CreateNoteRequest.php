<?php

$messages = [
    'title' => [
        'required' => 'title required',
        'min'      => 'title must be bigger than or equal 3 charsets',
        'max'      => 'title must be Less than 100 characters',
    ],
    'body' => [
        'required'  => 'body required',
        'min'       => 'body must be bigger than or equal 3 charsets',
        'max'       => 'body must be Less than 300 characters',
    ],
];

if (strlen($_POST['title']) !== 0) {
    if (strlen($_POST['title']) < 3)
        $errors['title']['min'] = $messages['title']['min'];

    if (strlen($_POST['title']) >= 100)
        $errors['title']['max'] = $messages['title']['max'];
} else
    $errors['title']['required'] = $messages['title']['required'];

if (strlen($_POST['body']) !== 0) {
    if (strlen($_POST['body']) < 3)
        $errors['body']['min'] = $messages['body']['min'];

    if (strlen($_POST['body']) >= 300)
        $errors['body']['max'] = $messages['body']['max'];
} else
    $errors['body']['required'] = $messages['body']['required'];

if (!empty($errors))
    return $errors;
