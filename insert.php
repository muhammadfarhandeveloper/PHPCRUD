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


    <?php include 'navbar.php' ?>


      <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <div class="container mt-5">

        <div class="row">
            <h1 class="text-center">Insertion Data</h1>
            <div class="col-md-6 mt-5">
                <input type="text"  placeholder="Enter First Name" name="fname" required class="form-control"/>
            </div>
            <div class="col-md-6 mt-5">
                <input type="text" placeholder="Enter Last Name" name="lname" required class="form-control"/>
            </div>
            <div class="col-md-12 mt-5">
                <input type="email" placeholder="Enter Email Name"  name="email" required class="form-control"/>
            </div>
        </div>
                <div class="row mt-5">
                    <div class="offset-md-4 col-md-4">
                        <button type="submit" class="btn btn-primary w-100" name="send">Submit</button>
                    </div>
                </div>
        
        </div>
        
    </form>

    <?php

        if(isset($_POST['send'])){

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];

            $conn = mysqli_connect("localhost","root","","batch09") or die("loos connection");
            $query = "insert into student(st_fname,st_lname,email) values('{$fname}','{$lname}','{$email}')";
            $result = mysqli_query($conn,$query) or die("data not inserted");
            echo $result;
            echo "form submitted";
        }

?>



    <?php include 'footer.php' ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>