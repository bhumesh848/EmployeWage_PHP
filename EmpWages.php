<?php

class EmpWages{
   function welcomeMsg(){
       echo "Welcome to employee wage problem"."\n";
   }
   function empCheck(){
      
       $empWagePerHour = 20;
       $fullDayHour = 8;
       $number =rand(0,1);
       $dailyWage =0;
       if($number==1){
           echo "Employee is present"."\n";
           $dailyWage = $empWagePerHour * $fullDayHour;
       }
       else{
           echo "Employee is Absent"."\n";
       }
       
       echo "Daily employee wage is :". $dailyWage;

   }
}
$empWage = new EmpWages();
$empWage->welcomeMsg();
$AttendanceCheck = new EmpWages();
$AttendanceCheck->empCheck();



?>