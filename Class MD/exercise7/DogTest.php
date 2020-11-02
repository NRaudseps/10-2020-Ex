<?php

require_once 'Dog.php';

class DogTest
{
    protected array $dogs;

    public function main(array $inputDogs)
    {
        foreach ($inputDogs as $inputDog) {
            $dog = new Dog(
                $inputDog['name'],
                $inputDog['sex'],
                $inputDog['father'],
                $inputDog['mother']
            );
//          Creates new dogs - father and mother respectively
            $father = new Dog($inputDog['father'], 'male');
            $mother = new Dog($inputDog['mother'], 'female');

            $this->dogs[] = $dog;
            //Checks to see if the mother of father is already in the list
            //If they aren't add them
            if (!in_array($mother->getName(), self::getDogNames())) {
                $this->dogs[] = $mother;
            }
            if (!in_array($father->getName(), self::getDogNames())) {
                $this->dogs[] = $father;
            }
        }
    }

    protected function getDogNames()
    {
        $dogNames = [];
        foreach ($this->dogs as $dog) {
            $dogNames[] = $dog->getName();
        }

        return $dogNames;
    }
}