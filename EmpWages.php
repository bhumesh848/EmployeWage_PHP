<?php

class EmpWages{
    const PART_TIME_HOUR = 4;
    const FULL_DAY_HOUR = 8;
    const EMP_WAGE_PER_HOUR = 20;
    const FULL_TIME = 1;
    const PART_TIME = 2;
   function welcomeMsg(){
       echo "Welcome to employee wage problem"."\n";
   }
   function empCheck(){
      $dailyHour = 0;
      
       $number =rand(0,2);
       if($number== EmpWages:: FULL_TIME){
           echo "Employee is present"."\n";
          $dailyHour = EmpWages::FULL_DAY_HOUR;
       }
       elseif($number==EmpWages::PART_TIME){
           echo "Employee is part time";
           $dailyHour = EmpWages::PART_TIME_HOUR;
       }
       else{
           echo "Employee is Absent"."\n";
       }
       $dailyWage = EmpWages::EMP_WAGE_PER_HOUR * $dailyHour;
       echo "Daily employee wage is :". $dailyWage."\n";
   
}
}
$empWage = new EmpWages();
$empWage->welcomeMsg();
$empWage->empCheck();

?>