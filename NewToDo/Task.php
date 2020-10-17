<?php

class Task
{
    private string $task;
    private string $id;

    public function __construct(string $task, string $id)
    {

        $this->task = $task;
        $this->id = $id;
    }

    public function getTask():string
    {
        return $this->task;
    }
    public function getID():string
    {

        return $this->id;
    }



}