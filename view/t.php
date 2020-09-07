<?php

echo input('name') ?? '';
function input(string $key)
{
    $input = $_SERVER['REQUEST_METHOD'];
    $value = null;
    switch ($input) {
        case 'POST':
            $value = $_POST[$key];
            break;
        case 'GET':
            $value = $_GET[$key];
            break;
        default:
            break;
    }
    if (empty($value)) {
        return null;
    } else
        return $value;
}
