<?php

$textStorage = [];

function add(string $title, string $text, array &$textStorage): void {
    $textStorage[] = [
        'title' => $title,
        'text' => $text,
    ];
}

add('Заголовок 1', 'Текст 1', $textStorage);
add('Заголовок 2', 'Текст 2', $textStorage);

print_r($textStorage);

function remove(int $postId, array &$textStorage): bool {
    if (isset($textStorage[$postId])) {
        unset($textStorage[$postId]);
        return true;
    }
    return false;
}

var_dump(remove(0, $textStorage));
var_dump(remove(5, $textStorage));

print_r($textStorage);