<?php

define("PAGE_TITLE", "PHP Todo List");
$todos = ['Walk the dog', 'Hunt the rabbit', 'Show the cat who is boss'];
$animals = [
    'type' => 'dog',
    'age' => 4,
    'fur_color' => 'brown'
];
require 'index.view.php';


$tasks = [
    'title'      => 'Walk the doggie',
    'due'        => 'today',
    'assignedTo' => 'Beth',
    'completed'  =>  false
];


