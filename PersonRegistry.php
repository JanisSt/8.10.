<?php

class PersonRegistry
{
    private string $path;
    private array $persons = [];

    public function __construct(string $path)
    {

        $this->path = $path;

    }

    public function savePersonToCSV(): void
    {
        $file = fopen($this->path, 'rw+');
        foreach ($this->persons as $person) {
            // var_dump($person);
            if ($person) {
                fputcsv($file, (array)$person);
            }
        }
        fclose($file);
    }

    public function loadPersons(): void
    {
        $file = fopen($this->path, 'rw+');
        while ($person = fgetcsv($file)) {
            $this->persons[] = new Person(
                (string)$person[0],
                (string)$person[1],
                (int)$person[2],
                (string)$person[3]
            );
        }
        fclose($file);
    }

    public function setPersons(): void
    {
        if (isset($_POST['name'])) {
            $this->persons[] = new Person(
                $_POST['name'],
                $_POST['surname'],
                $_POST['personID'],
                $_POST['address']
            );
        }
    }

    public function searchPerson(): string
    {
        if (isset($_POST['search'])) {
            foreach ($this->persons as $person) {
                if ($person->getPersonID() == $_POST['search']) {
                    return 'Name: ' . $person->getName() .
                        ', Surname: ' . $person->getSurname() .
                        ', PersonID: ' . $person->getPersonID() .
                        ', Address: ' . $person->getAddress();
                }
            }
            return 'No such person found, please try again';
        }return '';
    }


}