<?php

namespace TaskApi\Repositories;

class TaskMemoryRepository implements TaskRepository
{
    private $tasks = [];
    public function save($task)
    {
        $tasks[] = $task;
    }
}

