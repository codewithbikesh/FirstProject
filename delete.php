<?php
 include('dbconnection.php');
 $id =$_GET['id'];
 
 $sql = "DELETE FROM member WHERE Sno = '$id'";
 $result = mysqli_query($conn,$sql);
 if($result){
echo"<script>alert('deleted successfully'); 
window.location.href='MemberResults.php';
</script>
";
 }else{
    echo"<script>alert('not deleted successfully'); </script>
    "; 
 }
//  if($result){
//      echo "Deleted Successfully";
//  }else{
//      echo"Not Deleted Successfully";
//  }
?>
