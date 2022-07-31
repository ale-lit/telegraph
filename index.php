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

function edit(int $postId, string $title, string $text, array &$textStorage): bool {
    if (isset($textStorage[$postId])) {
        $textStorage[$postId]['title'] = $title;
        $textStorage[$postId]['text'] = $text;
        return true;
    }
    return false;
}

edit(1, 'Новый заголовок 2', 'Новый текст 2', $textStorage);

print_r($textStorage);

var_dump(edit(11, 'Новый заголовок 11', 'Новый текст 11', $textStorage));
