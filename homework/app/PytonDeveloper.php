<?php

namespace App;

class PytonDeveloper extends Developer
{
    public string $name;
    public int $age;
    public string $position;
    //Junior, Middle, Senior, TeamLead

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function rateTask(): int
    {
        $min = 1;
        $max = 10;
        return mt_rand($min, $max);
    }
}