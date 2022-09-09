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

    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn  = mysqli_connect("localhost","root","","batch09") or die("Loost Connections");
                    $query = "select * from student";
                    $result = mysqli_query($conn,$query) or die("not data!");
                    
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['st_fname']; ?></td>
                        <td><?php echo $row['st_lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['id']?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
                    </tr>

            </tbody>
        
            <?php } 
            }
            else{
                echo "<h1 class='text-danger'>No data found</h1>";
            }
            ?>
        </table>

    </div>



    <?php include 'footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>