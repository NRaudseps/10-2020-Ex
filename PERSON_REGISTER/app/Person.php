<?php


namespace REGISTER\app;


class Person
{
    protected string $name;
    protected string $surname;
    protected string $code;
    protected string $address;

    public function __construct(string $name = '', string $surname = '', string $code = '', string $address = '')
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->code = $code;
        $this->address = $address;
    }

    public function getInfo(): array
    {
        return [
            $this->name,
            $this->surname,
            $this->code,
            $this->address,
        ];
    }
}