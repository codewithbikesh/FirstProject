<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Data Table  -->
    <!-- Data Table from Jquery  -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Bootstrap css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-Awesome css  -->
    <link rel="stylesheet" href="css/font.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <title>Category Results</title>
</head>

<body>

    <!-- Start Table Section  -->
    <div class="container">
        <h1 class="text-center">Category Results</h1>
        <div class="row d-fluid justify-content-center">
            <div class="col-md-8">
                <!-- Start Table Section  -->
                <!-- <div class="container my-4"> -->
                <table class="table" id="myTable">
                    <thead>
                        <tr class="bg-dark text-white text-center">
                            <th scope="col">S.No</th>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col" colspan="3" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('dbconnection.php');
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($conn, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- $sno = $sno + 1; -->
                        <tr class="text-center border border-dark">
                            <td class="border border-dark">
                                <?php echo $i ?>
                            </td>
                            <td class="border border-dark">
                                <?php echo $row['rCode']; ?>
                            </td>
                            <td class="border border-dark">
                                <?php echo $row['rName']; ?>
                            </td>
                            <td class="border border-dark">
                                <?php echo $row['rType']; ?>
                            </td>
                            <td class="border border-dark">
                                <button class="btn btn-primary">
                                    <a href="delete1.php?id=<?php echo $row['Sno']; ?>"
                                        class="text-white text-decoration-none">Delete</a>
                                </button>
                            </td>
                            <td><button class="btn btn-primary"><a href="update1.php?id=<?php echo $row['Sno']; ?>"
                                        class="text-white text-decoration-none">Update</a></button></td>
                        </tr>
                        <?php
                            $i++;
                        }
                        ?>

                    </tbody>
                </table>
                <!-- </div> -->
                <hr>
                <div class="col-md-12 d-grid">
                    <a href="category.php" class="view btn btn-outline-primary  mt-3 fw-bolder">Back To Home</a>
                </div>
            </div>
        </div>
    </div> <!-- End Table Section  -->
    <script src="js/javascript.js"></script>
    <!-- Javascript Section Start From Here  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- font-awesome section start from here   -->
    <script src="js/font.min.js"></script>
    <!-- jquery Section Start From Here  -->
    <script src="js/jquery.min.js"></script>
    <!-- Js popper section start from here  -->
    <script src="js/popper.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
</body>

</html>