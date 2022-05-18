<?php

class EmpWages
{
    const PART_TIME_HOUR = 4;
    const FULL_DAY_HOUR = 8;
    const EMP_WAGE_PER_HOUR = 20;
    const FULL_TIME = 1;
    const PART_TIME = 2;
    const WORKING_DAYS = 20;
    const MAX_HOURS = 100;
    function welcomeMsg()
    {
        echo "Welcome to employee wage problem" . "\n";
    }
    function empCheck()
    {
        $dailyHour = 0;
        $day = 0;
         while($day<EmpWages::WORKING_DAYS && $dailyHour <=EmpWages::MAX_HOURS){
            $number = rand(0, 2);
            switch ($number) {
                case EmpWages::FULL_TIME:
                    echo "Employee is present" . "\n";
                    $dailyHour += EmpWages::FULL_DAY_HOUR;
                    break;
                case EmpWages::PART_TIME:
                    echo "Employee is part time";
                    $dailyHour += EmpWages::PART_TIME_HOUR;
                    break;
                default:
                    echo "Employee is Absent" . "\n";
            }
            $day++;
         }
        
        $monthlyWage = EmpWages::EMP_WAGE_PER_HOUR * $dailyHour;
        echo "Daily employee wage is :" . $monthlyWage . "\n";
        echo "number of  total working days =". $day."\n";
        echo "number of working hours = $dailyHour";
        
    }
}
$empWage = new EmpWages();
$empWage->welcomeMsg();
$empWage->empCheck();