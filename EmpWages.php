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
       echo "Daily employee wage is :". $dailyWage."\n";

   }
   function partTime(){
       $partTimeEmpWagePerHour = 15;
       $partTimeHour =8;
       $totalPartTimeWage = $partTimeEmpWagePerHour * $partTimeHour;  
       echo "part Time employee wage is :" .$totalPartTimeWage;

   }
}
$empWage = new EmpWages();
$empWage->welcomeMsg();
$AttendanceCheck = new EmpWages();
$AttendanceCheck->empCheck();
$partTimeWage = new EmpWages();
$partTimeWage->partTime();




?>