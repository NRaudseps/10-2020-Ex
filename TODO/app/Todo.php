<?php

namespace TODO\app;

class Todo
{
    protected string $task;
    protected int $id;

    public function __construct(string $task, int $id)
    {
        $this->task = $task;
        $this->id = $id;
    }

    public function getTask(): string
    {
        return $this->task;
    }

    public function getId(): int
    {
        return $this->id;
    }
}