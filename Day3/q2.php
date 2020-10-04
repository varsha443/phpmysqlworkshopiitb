<?php
 
 $connect=mysqli_connect("localhost","root","");
 mysqli_select_db($connect,"result") or die("ERROR");
 if($connect)
 {
  $extract=mysqli_query($connect,"SELECT * FROM `class1` WHERE name='rohan'");
  while($row=mysqli_fetch_assoc($extract))
  {
   $s1=$row["sub1"];
   $s2=$row["sub2"];
   $s3=$row["sub3"];
   $s4=$row["sub4"];
   $s5=99;
   $newname=$row["name"];
   $newtotal=$s1+$s2+$s3+$s4+$s5;
   $newpercent=($newtotal/500)*100;
   
   mysqli_query($connect, "UPDATE class1 SET sub5='$s5', totalobtained= '$newtotal',percent='$newpercent' WHERE name='$newname'");
  }
  echo "New changes are done";
}
?>