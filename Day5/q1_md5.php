
<form action="q1_md5.php" method="POST">
    Enter your username: 
    <input type="text" name="username"><br>
    Enter your Password:
    <input type="password" name="password"> <br>
    <input type="submit" value="SUBMIT" name="submit">
</form>

<?php
if(@$_POST['submit'])
{
    $username=@$_POST['username'];
    $password=@$_POST['password'];
    $encupwd=md5($password);
    $con=mysqli_connect("localhost","root","","result1");
    if($con)
    {
        $ins=mysqli_query($con,"INSERT into data values('$username','$password') ") or die("ERROR");
        if($ins)
        {
            echo "DATA ENTERED SUCCESSFULLY <br>" ;
        }
        else
        {
            echo "FAILED to insert data<br>";
        }
    }
    else
    {
        echo "Database connection failed";
    }
}
?>