<?php
require 'functions.php';

define("PAGE_TITLE", "PHP Todo List");
$todos = ['Walk the dog', 'Hunt the rabbit', 'Show the cat who the boss is '];
$animals = [
    'type' => 'dog',
    'age' => 4,
    'fur_color' => 'brown'
];

$tasks2 = [
    'name'      => 'Walk the doggie',
    'due'        => 'today',
    'assigned_to' => 'Beth',
    'completed'  =>  true
];


class Task
{
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function description()
    {
        return $this->description;
    }
}

$task = new Task('Go to the store');
$task1 = new Task("Walk the doggie");
$task2 = new Task("Show the cat who is the boss");
$task3 = new Task("Buy an elephant to ride to work");

$tasks = [ $task, $task1, $task2, $task3];


require 'index.view.php';
require 'clases.php';
