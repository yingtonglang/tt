<?php
  ob_start();
  session_start();
  include("profile.php");

  if(isset($_POST["id"])){
    $id=$_POST["id"];
    $pwd=$_POST["pwd"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    $sql="SELECT * FROM member WHERE id='$id' AND pwd='$pwd'";
    $result=mysqli_query($link, $sql);
    $rows=mysqli_num_rows($result);
  
    if($rows){
      echo "Success";
      $_SESSION["check"]="yes";
      $_SESSION["id"]=$id;
      $_SESSION["pwd"]=$pwd;
      $cookietime=new DateTime("now");
      $cookietime=$cookietime->modify('+1 week');
      setcookie("member","Cookie測試",$cookietime); 
      header('refresh:3; url="profile.php"');
      echo "".$id."歡迎回來，您上一次登入的時間為".$logtime."，您的登入次數為".$count."";
    }
    else{
      echo "Failed, Will back to login page after 3 second";
      header('refresh:3; url="index.html"');
    }

  }
?>