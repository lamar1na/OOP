<?php

namespace App;

class RateTasks
{
    static public function TakeRateFromDev($programLang): int
    {
        switch ($programLang)
        {
            case 'PHP':
                $phpDeveloper = new PhpDeveloper('Frank', 25,'Junior');
                return $phpDeveloper->rateTask();
            case 'Go':
                $goDeveloper = new GoDeveloper('Nick', 30,'Middle');
                return $goDeveloper->rateTask();
            case 'Pyton':
                $pythonDeveloper = new PytonDeveloper();
                return $pythonDeveloper->rateTask();
            case 'Ruby':
                $rubyDeveloper = new RubyDeveloper();
                return $rubyDeveloper->rateTask();
            default:
                $programLang = 0;
                break;
        }
        return $programLang;
    }
    static public function GenerateFinalResult($programLang): int
    {
        $projectManager = new ProjectManager();
        return $projectManager->rateTheTasks(self::TakeRateFromDev($programLang));

    }
}