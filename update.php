<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home Page</title>
</head>

<body>



<?php

$sid  = $_GET['id'];

$conn = mysqli_connect("localhost","root","","batch09") or die("database not connet");
$query = "select * from student where id={$sid}";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){
    $fname = $row['st_fname'];
    $lname = $row['st_lname'];
    $email = $row['email'];
}


    ?>
    



            <div class="container mt-5">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <div class="row">
                        <h1 class="text-center">Update Data</h1>
                        <div class="col-md-6 mt-5">
                            <input type="text" name="fname" value="<?php echo $fname?>"  placeholder="Enter First Name" required class="form-control" />
                        </div>
                        <div class="col-md-6 mt-5">
                            <input type="text" name="lname" value="<?php echo $lname?>" placeholder="Enter Last Name"  required class="form-control" />
                        </div>
                        <div class="col-md-12 mt-5">
                            <input type="email" name="email" value="<?php echo $email?>" placeholder="Enter Email Name"  required class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="offset-md-4 col-md-4">
                            <button type="submit" name="update" class="btn btn-primary w-100">Update</button>

                        </div>
                    </div>





            </div>

            </form>

            <?php
        if(isset($_POST['update'])){

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];

            $conn = mysqli_connect("localhost","root","","batch09") or die("Database not found");
            $query = "update student set st_fname='{$fname}' , st_lname='{$lname}' , email='{$email}' where id={$sid}";
            $result = mysqli_query($conn,$query) or die("not excute query");

            
            header("Location: http://localhost/CRUDwork2/index.php");
            
        }

?>



    <?php include 'footer.php' ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>