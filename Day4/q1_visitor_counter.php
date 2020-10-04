<?php


//$file=fopen("count.txt","w");

//fwrite($file,0);

echo "<h2>VISITOR COUNT USING FILE</h2>";

$file=file_get_contents("count.txt","r");
$vc=$file;
$uvc=++$vc;

$filen=fopen("count.txt","w");
fwrite($filen,($uvc));
echo "Visitor count: ".$uvc;

$con=mysqli_connect("localhost","root","","result") or die("error in connection") ;
//mysqli_select_db($con,) or die("error in selecting db");

//$ins=mysqli_query($con,"insert into counter values (0)") or die ("NOT CONNECTED");

$ret=mysqli_query($con,"SELECT * from counter");

while ($row = mysqli_fetch_assoc($ret)) {
    $count=$row['count'];

    echo "<h2>VISITOR COUNT USING MYSQL DATABASE</h2>";

$upd=++$count;
mysqli_query($con,"UPDATE counter set count=$upd ");
echo "Visitor count: ".$count;



}


?>