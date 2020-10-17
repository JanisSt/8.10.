<?php

class TaskStorage
{
    private string $path;
    private array $todos;

    public function __construct(string $path)
    {

        $this->path = $path;
        $this->getTasks();
    }


    private function getTasks(): void
    {
        $csv = fopen($this->path, 'r');

        while (($task = fgetcsv($csv)) == true) {
            $this->todos[] =
                new Task($task[0], $task[1]);

        }
        fclose($csv);
    }

    public function addNew($todo): void
    {
        if ($todo) {
            $this->todos[] = new Task($todo, uniqid(rand(), true));
        }
    }

    public function getToDos(): array
    {
        if (isset($this->todos)) {
            return $this->todos;
        }
    }

    public function toCSV($id): void
    {
        $data = fopen($this->path, 'w');
        if (isset($this->todos)) {
            foreach ($this->todos as $todo) {
                if ($id !== $todo->getID()) {
                    fputcsv($data, (array)$todo);

                }
            }
        }


    }

}