<?php


$user = [
    ['name' => 'bebras', 'pass' => md5('123'), 'color' => 'pink'],
    ['name' => 'briedis', 'pass' => md5('123'), 'color' => 'skyblue'],
    ['name' => 'ona', 'pass' => md5('123'), 'color' => 'black'],
];

file_put_contents('users.json', json_encode($user));