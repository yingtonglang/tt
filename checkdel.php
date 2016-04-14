<?php
  echo "<center>是否確定刪除這個帳號<br/></center>";
  echo "<center><input type='submit' value='確定刪除'></center>";
   
  $no=$_GET["no"];
  $link=mysqli_connect("localhost","root","upcju4062","user");
  $del="DELETE FROM member WHERE no=".$no;
  mysqli_query($link,$del);

?>