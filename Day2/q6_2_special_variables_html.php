<html>
 <form action="q6_2_special_variables_html.php" method="POST">
 Name: <input type="text" name="name"><br>
 Enter your marks below<br>
 Subject1:<input type="text" name="mark1"><br>
 Subject2:<input type="text" name="mark2"><br>
 Subject3:<input type="text" name="mark3"><br>
 Subject4:<input type="text" name="mark4"><br>
 Subject5: <input type="text" name="mark5"><br>
 <input type="submit">
</form>
</html>

<?php
 if(isset($_POST['name'],$_POST['mark1'],$_POST['mark2'],$_POST['mark3'],$_POST['mark4'],$_POST['mark5']))
 {
  $n=$_POST['name'];
  $sub1=$_POST['mark1'];
  $sub2=$_POST['mark2'];
  $sub3=$_POST['mark3'];
  $sub4=$_POST['mark4'];
  $sub5=$_POST['mark5'];
  
  $total=$sub1+$sub2+$sub3+$sub4+$sub5;
  $result=($total/500)*100;

  if ($n && $sub1 && $sub2 && $sub3 && $sub4 && $sub5)
 {
		echo "<br><br>";
		echo "Name of Student: ".$n."<br>";
		echo "Marks in Each Subject: <br>";
		echo "Subject 1: ".$sub1."<br>";
		echo "Subject 2: ".$sub2."<br>";
		echo "Subject 3: ".$sub3."<br>";
		echo "Subject 4: ".$sub4."<br>";
		echo "Subject 5: ".$sub5."<br>";
		echo "Total Marks Obtained: ".$total."<br>";
		echo "Total Marks: 500 <br>";
		echo "Percentage: ".$result;
  }
}
?>