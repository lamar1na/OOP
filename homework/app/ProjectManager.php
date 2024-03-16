<?php

namespace App;

class ProjectManager implements ManagerInterface
{
    const float TIME_COSTS = 6.0;
    public function rateTheTasks($hoursAmount): int
    {
        return $hoursAmount * self::TIME_COSTS;
    }

}








//    public function multip(): int
//    {
//        return $this->rateTask() * $this->timeCosts;
//    }