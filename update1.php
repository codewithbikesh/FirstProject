<?php
 include('dbconnection.php');
 $id = $_GET['id'];
// $sql = "select * from member where Sno='$id'";
// $exicuitequery = mysqli_query($conn,$sql);
// $query = mysqli_fetch_assoc($exicuitequery);
if(isset($_POST['update1'])){
    // $rId = $_POST['Rid'];
    $rCode = $_POST['Code'];
    $rName = $_POST['Name'];
   $rType = $_POST['Type'];
   $updateQry = "update category set rName='$rName', rCode='$rCode', rType='$rType' where Sno='$id'";
   $result = mysqli_query($conn,$updateQry);
   if($result){
    echo"<script>alert('Sure you want to update your data now'); 
    window.location.href='CategoryResults.php';
    </script>
    ";
     }
     
 }
 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagory</title>
    <!-- Bootstrap css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-Awesome css  -->
    <link rel="stylesheet" href="css/font.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Start header section -->
    <?php
    include('header.php');
    ?>
    <!-- End header section -->
    <div class="mt-5 text-center" style="font-size:23px;">
        <span>Category</span>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- <div class="col-sm-12 col-md-12 shadow-lg p-4 rounded"> -->
                <form action="" method="POST">
                    <div class="row justify-content-center">
                        <?php 
//    $id = $_GET['id'];
   $sql = "select * from category where Sno='$id'";
   $result = mysqli_query($conn, $sql);
   while($row=mysqli_fetch_assoc($result)){
?>
<div class="col-sm-6 col-md-4 shadow-lg p-4 rounded">
                <form action="category.php" name="myForm" onsubmit="return validateForm()" method="POST">
                    <div class="form-group">
                        <label for="Code" class="font-weigth-bold pl-2">Code</label><input type="text" name="Code"
                            class="form-control mt-1" placeholder="Enter Your Code here" value=" <?php echo $row['rCode']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Name" class="font-weigth-bold pl-2">Name</label><input type="text" name="Name"
                            class="form-control mt-1" placeholder="Enter Your Name here" value=" <?php echo $row['rName']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Type" class="font-weigth-bold pl-2">Type</label><input type="text" name="Type"
                            class="form-control mt-1" placeholder="Enter Your Type here" value=" <?php echo $row['rName']; ?>">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-danger mt-3 fw-bolder"
                            name="update1">Update</button>
                    </div>
                    <br>
                    <?php 
                        if(isset($regmsg))
                        { 
                            echo $regmsg; 
                        } 
                        ?>
                        <?php
                        }
                        ?>

                    </div>
                    <!---End Main Form Column--->
                    <!-- Start Thirt Column  -->
                    <!-- <div class="col-md-4"> -->
                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-outline-primary  mt-3 fw-bolder"
                                    name="update">Update</button>
                                </div>

                                <br> -->
<!--               
                        </div>
                        <div class="col-md-6">
                            <div class="row"> -->

                                <!--Start Second Column-->

                                <!-- <div class="col-md-6 d-grid"> 
                                    <button class="btn btn-outline-primary mt-3 fw-bolder">Update</button>
                                  </div> -->

                                <!--End Second Column-->

                                <!--First Column-->

                                <!-- <div class="col-md-6 d-grid"> 
                                  <a href="MemberResults.php" class="view btn btn-outline-primary  mt-3 fw-bolder">VIEW</a>
                                  </div>
                                   -->
                                <!--End First Column-->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- End Thirt Column  -->

                </form>

            </div>
        </div>

    </div>
    <!--End Form Container Section-->



    <!-- Javascript Section Start From Here  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- font-awesome section start from here   -->
    <script src="js/font.min.js"></script>
    <!-- query Section Start From Here  -->
    <script src="js/jquery.min.js"></script>
    <!-- Js popper section start from here  -->
    <script src="js/popper.min.js"></script>



</body>

</html>