<?php

define("PAGE_TITLE", "PHP Todo List");
$todos = ['Walk the dog', 'Hunt the rabbit', 'Show the cat who is boss'];
$animals = [
    'type' => 'dog',
    'age' => 4,
    'fur_color' => 'brown'
];

$tasks = [
    'name'      => 'Walk the doggie',
    'due'        => 'today',
    'assigned_to' => 'Beth',
    'completed'  =>  false
];


require 'index.view.php';
