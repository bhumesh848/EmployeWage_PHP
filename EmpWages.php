<?php

class EmpWages{
   function welcomeMsg(){
       echo "Welcome to employee wage problem"."\n";
   }
   function empCheck(){
       $empAbsent = 0;
       $empPresent = 1;
       $empWagePerHour = 20;
       $fullDayHour = 8;
       $number =rand(0,1);
       if($number==1){
           echo "Employee is present"."\n";
       }
       else{
           echo "Employee is Absent"."\n";
       }
       $dailyWage = $empWagePerHour * $fullDayHour;
       echo "Daily employee wage is :". $dailyWage;

   }
}
$empWage = new EmpWages();
$empWage->welcomeMsg();
$AttendanceCheck = new EmpWages();
$AttendanceCheck->empCheck();



?>