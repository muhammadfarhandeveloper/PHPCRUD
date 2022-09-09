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

        $sid = $_GET['id'];

?>


    <?php include 'navbar.php' ?>

            <div class="container mt-5">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <div class="row">
                        <h1 class="text-center">Delete Data</h1>
                        <div class="offset-md-4 col-md-3 mt-5">
                            <input type="text" name="id" readonly  value="<?php echo $sid?>" required class="form-control" />
                        </div>
                        
                    <div class="row mt-5">
                        <div class="offset-md-5 col-md-2">
                            <button type="submit" name="delete" class="btn btn-danger w-100">Delete</button>

                        </div>
                    </div>
            </div>

            </form>

            <?php

        if(isset($_POST['delete'])){

            $conn = mysqli_connect("localhost","root","","batch09");
            $query = "delete from student where id={$_POST['id']}";
            mysqli_query($conn,$query);

            header("Location: http://localhost/CRUDwork2/index.php");

            
        }

            ?>


    <?php include 'footer.php' ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>