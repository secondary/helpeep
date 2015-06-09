<html>
<body>

<?php
include ("inc/dbconnect.php");

if(isset($_POST['submit'])){
  if(($data["email"]!=$_POST['emailinput']) &&
     ($data["password"]!=$_POST['passinput'])){

    //echo "You haven't registered an account with Helpeep";
    $sql="INSERT INTO user (email,password) VALUES('$_POST[emailinput]','$_POST[passinput]')";
    mysql_query($sql);
    $sql2= "INSERT INTO providers(service_description,email) VALUES ('$_POST[textarea1]','$_POST[emailinput]')";
    mysql_query($sql2);
    echo "Account created";
  }
  /*
  elseif{
    <script type="text/javascript" >
      if(document.form-register1.checkbox-yes.checked==false){
        alert("Indicate whether You would like to provide server");
      }
    </script>
  }
  */
  else{
    echo "Your credential is present in our Helpeep's record";
  }
  
}

?>
  <form method="post" action="register1.php">
  <input type="submit" name="submit" value="Create Account"></input>
  </form>
  
</body>
</html>
