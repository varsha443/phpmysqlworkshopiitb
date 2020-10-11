<html>
 <form action="q1.php" method="POST">
 Name:<input type="text" name="name"><br>
 Enter your marks below<br>
 Subject1: <input type="text" name="sub1"><br>
 Subject2: <input type="text" name="sub2"><br>
 Subject3: <input type="text" name="sub3"><br>
 Subject4: <input type="text" name="sub4"><br>
 Subject5: <input type="text" name="sub5"><br>
 <input type="submit">
</form>
</html>


<?php

  $name=@$_POST["name"];
  $sub1=@$_POST["sub1"];
  $sub2=@$_POST["sub2"];
  $sub3=@$_POST["sub3"];
  $sub4=@$_POST["sub4"];
  $sub5=@$_POST["sub5"];
  $total_obtained=$sub1+$sub2+$sub3+$sub4+$sub5;
  $percent=($total_obtained/500)*100;
 
  $connect=mysqli_connect("localhost","root","") or die(mysql_error());

  mysqli_select_db($connect,"result") or die ("ERROR");

  $write=mysqli_query($connect,"Insert into class1 values('','$name','$sub1','$sub2','$sub3','$sub4','$sub5','$total_obtained','500','$percent')") or die(mysqli_error($connect));

  
  
  if($name)
  {
 
    echo "Name of Student: ".$name."<br>";
    echo "Marks in Each Subject <br> ";
    echo "Subject 1 :".$sub1."<br>";
    echo "Subject 2 :".$sub2."<br>";
    echo "Subject 3 :".$sub3."<br>";
    echo "Subject 4 :".$sub4."<br>";
    echo "Subject 5 :".$sub5."<br>";  
    echo "Total Marks Obtained: ".$total_obtained."<br>";
    echo "Total Marks: 500 <br>";
    echo "Percentage: " .$percent."<br>";
  }

?>