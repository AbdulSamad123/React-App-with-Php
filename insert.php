<?php
   $CN=mysqli_connect("localhost","root","");
   $DB=mysqli_select_db($CN,"cst");

   $RollNo = $_POST['RollNo'];
   $StudentName = $_POST['StudentName'];
   $Course = $_POST['Course'];

   $IQ = "insert into studentmaster(RollNo,StudentName,Course) values($RollNo, '$StudentName', '$Course')";

   $R=mysqli_query($CN,$IQ);

   if($R)
   {
       $Message="Student has been registered successfully";
   }
   else
   {
       $Message="Error please try later";
   }

   $Response[]=array("Message"=>$Message);
   echo json_encode($Message);

?>