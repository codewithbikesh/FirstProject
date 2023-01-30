<?php
 include('dbconnection.php');
 $id = $_GET['id'];
// $sql = "select * from member where Sno='$id'";
// $exicuitequery = mysqli_query($conn,$sql);
// $query = mysqli_fetch_assoc($exicuitequery);
if(isset($_POST['update'])){
    // $rId = $_POST['Rid'];
    $rName = $_POST['Name'];
    $rCode = $_POST['Code'];
   $rCategory = $_POST['Category'];
   $rMobileNo = $_POST['MobileNo'];
   $rEmail = $_POST['Email'];
   $rCity = $_POST['City'];
   $rState = $_POST['State'];
   $rCountry = $_POST['Country'];
   $rAddress = $_POST['Address'];
   $rActive = $_POST['Active'];
   $updateQry = "update member set rName='$rName', rCode='$rCode', rCategory='$rCategory', rMobileNo='$rMobileNo', rEmail='$rEmail', rCity='$rCity', rState='$rState', rCountry='$rCountry', rAddress='$rAddress', rActive='$rActive' where Sno='$id'";
   $result = mysqli_query($conn,$updateQry);
   if($result){
    echo"<script>alert('Sure you want to update your data now'); 
    window.location.href='MemberResults.php';
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
        <span>Member</span>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 shadow-lg p-4 rounded">
                <form action="" method="POST">
                   <div class="row">
   <?php 
   $id = $_GET['id'];
   $sql = "select * from member where Sno='$id'";
   $result = mysqli_query($conn, $sql);
   while($row=mysqli_fetch_assoc($result)){



   ?>
                        <!--Start first column  -->
                          <div class="col-md-6"> 
                          <div class="form-group">
                      <label for="Name"
                            class="font-weigth-bold pl-2">Name</label>
                            <!-- <input type="text" name="Rid" value="<?php echo $row['Sno']; ?>"> -->
                            <input type="text" name="Name"
                            class="form-control mt-1" placeholder="Enter Your Name here" value="<?php echo $row['rName']; ?>" required>
                    </div>

                    <div class="form-group">
                         <label for="Code"
                            class="font-weigth-bold pl-2">Code</label><input type="text" name="Code"
                            class="form-control mt-1" placeholder="Enter Your Code here" value="<?php echo $row['rCode']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="Category"
                            class="font-weigth-bold pl-2">Category</label><input type="text" name="Category"
                            class="form-control mt-1" placeholder="Enter Your Category here" value="<?php echo $row['rCategory']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="Mobile No"
                            class="font-weigth-bold pl-2">Mobile No</label><input type="number" name="MobileNo"
                            class="form-control mt-1" placeholder="Enter Your Mobile No here" value="<?php echo $row['rMobileNo']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Email"
                            class="font-weigth-bold pl-2">Email</label><input type="email" name="Email"
                            class="form-control mt-1" placeholder="Enter Your Email here" value="<?php echo $row['rEmail']; ?>" required>
                    </div>

                   
                          </div>
                           <!--End first column  -->

                           <!-- Start Second Column  -->
                           <div class="col-md-6">
                              
                    <div class="form-group">
                      <label for="City"
                            class="font-weigth-bold pl-2">City</label><input type="text" name="City"
                            class="form-control mt-1" placeholder="Enter Your City here"  value="<?php echo $row['rCity']; ?>"required>
                    </div>
                    
                    <div class="form-group">
                      <label for="State"
                            class="font-weigth-bold pl-2">State</label><input type="text" name="State"
                            class="form-control mt-1" placeholder="Enter Your State here" value="<?php echo $row['rState']; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="Country"
                            class="font-weigth-bold pl-2">Country</label><input type="text" name="Country"
                            class="form-control mt-1" placeholder="Enter Your Country here" value="<?php echo $row['rCountry']; ?>" required>
                    </div>
                     
                    <div class="form-group">
                      <label for="Address"
                            class="font-weigth-bold pl-2">Address</label><input type="text" name="Address"
                            class="form-control mt-1" placeholder="Enter Your Address here" value="<?php echo $row['rAddress']; ?>" required>
                    </div>
                      
                        
                    <div class="form-group">
                      <label for="Active"
                            class="font-weigth-bold pl-2">Active</label>
                            <input type="text" name="Active"
                            class="form-control mt-1" placeholder="Enter Your Active here" value="<?php echo $row['rActive']; ?>">
                    </div>
                      </div>
                           <!-- End Second Column  -->
                           <?php
                        }
                        ?>

                        </div>  <!---End Main Form Column--->
                          <!-- Start Thirt Column  -->
                          <!-- <div class="col-md-4"> -->
                            <div class="row">
                              <div class="col-md-6">
                              <div class="d-grid">
                        <button type="submit" class="btn btn-outline-primary  mt-3 fw-bolder"
                            name="update">Update</button>
                         
                    </div>
                    <br>
                    <?php 
                        if(isset($regmsg))
                        { 
                            echo $regmsg; 
                        } 
                        ?>
                              </div>
                              <div class="col-md-6">
                                <div class="row">

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
                                  </div>
                              </div>
                            </div>
                           <!-- </div> -->
                           <!-- End Thirt Column  -->
                 
                </form>

            </div>
        </div>
       
    </div>   <!--End Form Container Section-->

   
     
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