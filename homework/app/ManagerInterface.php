<?php

namespace App;

interface ManagerInterface
{
    public function rateTheTasks($hoursAmount): int;

}