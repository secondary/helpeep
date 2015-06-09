<?php
include ("inc/dbconnect.php");
//$count= mysql_query("select * from providers");
//echo mysql_query($data2["service_description"]);


if(isset($_POST['submit'])){
  //search algorithm, directed on 'service_description' portion
/*
  $sql_cmd="select * from providers";
  $output= mysql_query($sql_cmd);
  echo '$output[]';
*/
}

?>

<html>
  <head>

  </head>
  <body>
    <br>
    <br>
    <center>
    <p>Search Results</p>
    <table border="1" width="80%">
     <tr>
      <td colspan="200%" rowspan="200%">      
         <?php
           //echo "<tr><td>Search Results</td></td><td>&nbsp</td></tr>";
           echo "<tr><td>Service Description</td><td>Contact Information</td></tr>";           
           if(isset($_POST['submit'])){
             while($data2=mysql_fetch_array($db_query2)){
               if($_POST[inputform1]==$data2[service_description]){
               echo "<tr><td>".$data2[service_description]."</td><td>".$data2[email]."</td></tr>";
               }
            
             }        
           }
        //    while( $count!=0){
          //    echo "Count: ".$count."<br>";
            //  $count--;
            //}

         ?>
      </td>
     </tr>
          
   </table>
   </center>
  </body>
  <footer>

  </footer>
</html>

