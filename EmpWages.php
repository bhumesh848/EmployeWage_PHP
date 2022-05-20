<?php

class EmpWages
{
    public $PART_TIME_HOUR = 4;
    public $FULL_DAY_HOUR = 8;
    public $FULL_TIME = 1;
    public $PART_TIME = 2;
    public $MAX_HOURS = 100;

    private $WORKING_DAYS_PER_MONTH;
    private $WORKING_HOURS_PER_MONTH;
    private $WAGE_PER_HR;

    function company()
    {
        $name = readline('Enter Name of Company: ');
        echo "Employee Wage Computation For" . $name . "\n";
        $this->WORKING_DAYS_PER_MONTH = readline('Enter Max Working Days Per Month: ');
        $this->WORKING_HOURS_PER_MONTH = readline('Enter Max Working Hours Per Month: ');
        $this->WAGE_PER_HR = readline('Enter Employee Wage Per Hour: ');
        $this->empCheck($this->WORKING_DAYS_PER_MONTH,$this->WORKING_HOURS_PER_MONTH, $this->WAGE_PER_HR);
    }
    function welcomeMsg()
    {
        echo "Welcome to employee wage problem" . "\n";
    }
    function empCheck($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR)
    {
        $dailyHour = 0;
        $day = 0;
        while ($day <= $WORKING_DAYS_PER_MONTH && $dailyHour <= $WORKING_HOURS_PER_MONTH) {
            $number = rand(0, 2);
            switch ($number) {
                case $this->FULL_TIME:
                    echo "Employee is present" . "\n";
                    $dailyHour += $this->FULL_DAY_HOUR;
                    break;
                case $this->PART_TIME:
                    echo "Employee is part time";
                    $dailyHour += $this->PART_TIME_HOUR;
                    break;
                default:
                    echo "Employee is Absent" . "\n";
            }
            $day++;
        }

        $monthlyWage = $WAGE_PER_HR * $dailyHour;
        echo "Daily employee wage is :" . $monthlyWage . "\n";
        echo "number of  total working days =" . $day . "\n";
        echo "number of working hours = $dailyHour";
    }
   
}



// $empWage = new EmpWages();
// $empWage->welcomeMsg();
// $empWage->empCheck();
$company1 = new EmpWages();
$company1->company();
$company2 = new EmpWages();
$company2->company();
