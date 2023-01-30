<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "firstproject";
 
// Create connection to the database 
 $conn = new mysqli ($db_host, $db_user, $db_password, $db_name);
//   Checking Connection 
if($conn->connect_error){
     die("Connection failed");

} 
// else{
//      echo "Connection Successfully To The Database";
// }

function popMsg($msg){
?>
     <script>
          alert("<?php echo $msg ?>");
     </script>
     <?php
}
?>