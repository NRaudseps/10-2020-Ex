<?php


class Dog
{
    protected string $name;
    protected string $sex;
    protected ?string $father;
    protected ?string $mother;

    public function __construct(string $name, string $sex, ?string $father = null, ?string $mother = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->father = $father;
        $this->mother = $mother;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFathersName(): string
    {
        return (!is_null($this->father)) ? $this->father : 'Unknown';
    }

    public static function hasSameMotherAs(Dog $dog, Dog $otherDog): bool
    {
        return $dog->mother === $otherDog->mother;
    }
}