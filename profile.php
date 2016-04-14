<?php
  $no=$_GET["no"];
  $link=mysqli_connect("localhost","root","upcju4062","user");

  $read="SELECT * FROM member WHERE no=".$no;
  $readresult=mysqli_query($link,$read);
  $result=@mysqli_fetch_array($readresult);

  echo "<form action='' method='post'>";
  echo "".$result[0]."<br/>";
  echo "<input type='hidden' name='no' value='".$result[0]."'>";
  echo "密碼:<input type='text' name='pwd' value='".$result[2]."'><br/>";
  echo "電子信箱:<input type='int' name='email' value='".$result[3]."'><br/>";
  echo "電話:<input type='text' name='phone' value='".$result[4]."'><br/>";
  echo "<input type='submit' value='更新'>";
  echo "<input type='button' value='刪除' onclick='window.location=(checkdel.php)'> ";
  echo "</form>";
?>