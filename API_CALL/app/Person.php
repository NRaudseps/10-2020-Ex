<?php

namespace APIFY\app;

class Person
{
    protected string $name;

    public function __construct(string $name = 'John')
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}