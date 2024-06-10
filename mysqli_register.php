<?php
//创建链接
$mysqli=new mysqli("localhost","root","","mydb"); 
if($mysqli->connect_errno){
    die("链接cuwou".$mysqli->connect_errno);
}
$pass = $_POST["pass"];
$name = $_POST["name"];
$email = $_POST["email"];


if(isset($_POST["reg"])){
    $sql = "INSERT INTO user (username,password,email) VALUES('$name','$pass','$$email')";
    $mysqli->query($sql);
    
    if($mysqli->affected_rows > 0)
    echo '注册成功';
}
mysqli_close($mysqli);//关闭链接
