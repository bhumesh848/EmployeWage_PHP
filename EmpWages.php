<?php

class EmpWages
{
    const PART_TIME_HOUR = 4;
    const FULL_DAY_HOUR = 8;
    const FULL_TIME = 1;
    const PART_TIME = 2;
    const MAX_HOURS = 100;
    function welcomeMsg()
    {
        echo "Welcome to employee wage problem" . "\n";
    }
    function empCheck($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR)
    {
        $dailyHour = 0;
        $day = 0;
         while($day<=$WORKING_DAYS_PER_MONTH && $dailyHour <=$WORKING_HOURS_PER_MONTH){
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
        
        $monthlyWage = $WAGE_PER_HR * $dailyHour;
        echo "Daily employee wage is :" . $monthlyWage . "\n";
        echo "number of  total working days =". $day."\n";
        echo "number of working hours = $dailyHour";
        
    }
    function company()
    {
        $name = readline('Enter Name of Company: ');
        echo "Employee Wage Computation For".$name."\n";
        $WORKING_DAYS_PER_MONTH = readline('Enter Max Working Days Per Month: ');
        $WORKING_HOURS_PER_MONTH = readline('Enter Max Working Hours Per Month: ');
        $WAGE_PER_HR = readline('Enter Employee Wage Per Hour: ');
        $this->empCheck($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR);
    }
}



// $empWage = new EmpWages();
// $empWage->welcomeMsg();
// $empWage->empCheck();
$company1 = new EmpWages();
echo $company1->company();
$company2 = new EmpWages();
$company2->company();