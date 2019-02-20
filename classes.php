<?php

class Task {
    protected $description;

    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }
}

$task = new Task('Go to the store');

dump_die($task);
