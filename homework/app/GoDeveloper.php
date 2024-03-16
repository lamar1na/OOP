<?php

namespace App;

class GoDeveloper extends Developer
{
    public string $name;
    public int $age;
    public string $position;
    //Junior, Middle, Senior, TeamLead

    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }
    public function rateTask(): int
    {
        $min = 1;
        $max = 10;
        return mt_rand($min, $max);
    }
}