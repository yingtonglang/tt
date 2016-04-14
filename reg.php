<html>
  <head>
    <title>mid A</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <font size="4" face="微軟正黑體">
    <h2><center>註冊帳號</center></h2>
    <form action="log.php" method="post">
      <center>帳號:<input type="text" name="id"></center><br/>
      <center>密碼:<input type="text" name="pwd"></center><br/>
      <center>電子信箱:<input type="text" name="email"></center><br/>
      <center>電話:<input type="int" name="phone"></center><br/>
    
      <center><input type="submit" value="送出資料">
      <input type="reset" value="清除資料"></center>
    </form>

  <?php
    if(isset($_POST["id"])){
      $id=$_POST["id"];
      $pwd=$_POST["pwd"];
      $email=$_POST["email"];
      $phone=$_POST["phone"];
      
      $link=mysqli_connect("localhost","root","upcju4062","user");
      $add="INSERT INTO member(id,pwd,email,phone) VALUES('{$_POST['id']}','{$_POST['pwd']}','{$_POST['email']}','{$_POST['phone']}')";
      mysqli_query($link,$add);
    }
  ?>

  </body>
</html>