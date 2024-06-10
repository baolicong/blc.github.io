<?php
//创建链接
$mysqli=new mysqli("localhost","root","","mydb"); 
if($mysqli->connect_errno){
    die("链接cuwou".$mysqli->connect_errno);
}
$pass = $_POST["pass"];
$name = $_POST["name"];
$email = $_POST["email"];


if(isset($_POST["login"])){
    $sql = "SELECT password FROM user WHERE username='$name'";
    $res = $mysqli->query($sql)->fetch_assoc();
    
    if($res){
        if(password_verify($_POST["pass"],$res["username"])){
                echo"<script>window.location.href='usermange.html?username=$name';</script>";
        }else{
            echo"<script>alert('密码错误i');history.go(-1);</script>"; 
        }    
    }else{
        echo"<script>alert('用户不存在');history.go(-1);</script>";
       
    }
}

    mysqli_close($mysqli);//关闭链接
