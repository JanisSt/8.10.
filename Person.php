<?php

class Person
{
    private string $name;
    private string $surname;
    private int $personID;
    private string $address;

    public function __construct(string $name, string $surname, int $personID, string $address)
    {

        $this->name = $name;
        $this->surname = $surname;
        $this->personID = $personID;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPersonID(): int
    {
        return $this->personID;
    }

    public function getAddress(): string
    {
        return $this->address;
    }


}