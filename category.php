<?php
 include('dbconnection.php');
//   Connected to the database 
if(isset($_POST['submit'])){
$rCode = $_POST ['Code'];
$rName = $_POST ['Name'];
$rType = $_POST ['Type'];
    if($rCode==""|| $rName==""|| $rType==""){
        $regmsg = '<div class="alert alert-danger" role="alert">
       All feilds are required!
      </div>';
    }else{
        $sql= "SELECT `rCode` FROM `category` WHERE rCode = '".$_POST['Code']."'";
        $result = $conn->query($sql);
        if($result->num_rows==1){
            $regmsg = '<div class="alert alert-danger" role="alert">
                 Code ID Already Existed. Enter Another Code ID 
           </div>';
        }
        else{
           $sql= " INSERT INTO `category`(`rCode`, `rName`, `rType`) VALUES ('$rCode','$rName','$rType')";
           if($conn->query($sql)==TRUE){
            $regmsg = '<div class="alert alert-success" role="alert">
                Account Created Successfully !
           </div>';
           }else{
            $regmsg = '<div class="alert alert-danger" role="alert">
               Account has not been created successfully !
           </div>';
           }
        }
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
            <div class="col-sm-6 col-md-4 shadow-lg p-4 rounded">
                <form action="category.php" name="myForm" onsubmit="return validateForm()" method="POST">
                    <div class="form-group">
                        <label for="Code" class="font-weigth-bold pl-2">Code</label><input type="text" name="Code"
                            class="form-control mt-1" placeholder="Enter Your Code here">
                    </div>

                    <div class="form-group">
                        <label for="Name" class="font-weigth-bold pl-2">Name</label><input type="text" name="Name"
                            class="form-control mt-1" placeholder="Enter Your Name here">
                    </div>
                    <div class="form-group">
                        <label for="Type" class="font-weigth-bold pl-2">Type</label><input type="text" name="Type"
                            class="form-control mt-1" placeholder="Enter Your Type here">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-danger mt-3 fw-bolder"
                            name="submit">Submit</button>
                    </div>
                 <div class="d-grid"> 
                                  <a href="CategoryResults.php" class="view btn btn-outline-primary  mt-3 fw-bolder">VIEW</a>
                                  </div>
                    <br>
                    <?php 
                        if(isset($regmsg))
                        { 
                            echo $regmsg; 
                        } 
                        ?>
                </form>

            </div>
        </div>

    </div>
    <!-- <script src="js/javascript.js"></script> -->
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