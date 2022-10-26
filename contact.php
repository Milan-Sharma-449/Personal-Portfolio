<?php

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$comments=$_POST["comments"];


$con = mysqli_connect("localhost", "id19618569_milan_portfolio" , "Gudda@123456789" , "id19618569_portfolio_contact")
    or die(mysqli_error($con));

$sql = "INSERT INTO message(name, phone, email, comments)"
        . "Values(?, ? , ? , ?)";

$stmt = mysqli_stmt_init($con);

if(! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($con));
}
mysqli_stmt_bind_param($stmt, "ssss",$name,$phone,$email,$comments);
mysqli_stmt_execute($stmt);

echo "Thank you for your response ...";
echo "You may exit now";