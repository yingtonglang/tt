<html>
  <head>
    <title>mid A</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <font size="4" face="微軟正黑體">
    <h2><center>使用者登入</center></h2>
    <form action="" method="post">
      <center>帳號:<input type="int" name="id"></center><br/>
      <center>密碼:<input type="text" name="pwd"></center><br/>

      <center><input type="submit" value="登入">
      <input type="reset" value="重新輸入"></center>
    </form>

  <?php
    $conn=@mysqli_connect("localhost","root","upcju4062","user");
    @mysql_select_db("memeber");
    if( $conn === FALSE ) {  die('mysqli connection error: '.mysqli_error()); }
     
    if(!empty($_POST['id'])or !empty($_POST['pwd'])){
      $id=$_POST['id'];
      $pwd1=$_POST['pwd'];
      @$sqlstr="SELECT * from member where id = '".$_POST['id']."' and pwd = '".$_POST['pwd']."' ";
      @$result = mysql_query($sqlstr)or die(mysql_error());
     
      if(mysql_num_rows($result)==1){
        $row=mysql_fetch_array($result);
        $_SESSION['id']=$row['id'];
        header("location:index.php");
      }
      else{
        echo "帳號或密碼錯誤，請重新登入";
        exit();
      }   
    }    
  ?>
  </body>
</html>