

<?php
$conn=mysqli_connect("localhost","root","","order");
if($conn)
{
echo "success";
}
else
{
echo "fail";
}
$username=$_POST['username'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$transaction=$_POST['transcation'];
$payment=$_POST['payment'];


//$query="CREATE DATABASE `DETAIL`";
//mysqli_query($conn,$query);
//$query1="CREATE TABLE `project1`(`username` varchar(30),`phoneno` varchar(15),`email` varchar(40),`password` varchar(20),`address` varchar(50),`transcation` varchar(20),`payment` varchar(20))";
//mysqli_query($conn,$query1);
//$query2="INSERT INTO `project1` (`username`,`phoneno`,`email`,`password`,`address`,`transcation`,`payment`) //values('$USERNAME','$PHONENO','$EMAIL','$PASSWORD','$ADDRESS','$TRANSCATIONS','$PAYMENT')";
//mysqli_query($conn,$query2);

//$sql="create database `order`";
//$sql="create table `mart`(`username` varchar(20),`phoneno` varchar(12),`email` varchar(50),`password` varchar(30),`address` //varchar(60),`transaction` varchar(30),`payment` varchar(30))";
$sql="insert into `mart`(`username`,`phoneno`,`email`,`password`,`address`,`transaction`,`payment`)values('$username','$phoneno','$email','$password','$address','$transaction','$payment')";
mysqli_query($conn,$sql);
?>
<html>
<body>
<center style="color:blue;padding:50px;font-size:40px">
<?php
session_start();
//set session variables
$_SESSION["USERNAME"]=$_POST["username"];
$_SESSION["WISHES"]="thank you";
echo $_SESSION["USERNAME"]." " ."THANKS for ORDERING the PRODUCT"."<br>";

if(isset($_SESSION["USERNAME"]))
{
echo "session variable set <br>";
}
else
{
echo "not set <br>";
}
//unset
unset($_SESSION["USERNAME"]);
echo $_SESSION["USERNAME"]."<br>";
echo $_SESSION["WISHES"]."<br>";
//session unset
session_unset();
echo $_SESSION["USERNAME"]."<br>";
echo $_SESSION["WISHES"]."<br>";
//destroy
session_destroy();
?>
</body>
</html>










