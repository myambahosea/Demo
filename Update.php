<?php include 'connection.php';
    $id = $_GET['id'];
    $select = "SELECT * FROM student WHERE id='$id'";
    $data = mysqli_query($con,$select);
    $row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div>
            <h1>Update Student Information</h1>    
            <form action="" method="post">
                <input class="inp1" type="text" value="<?php echo $row['firstname'] ?>" name="firstname" placeholder="firstname"><br><br>
                <input  class="inp1"type="text" value="<?php echo $row['lastname'] ?>" name="lastname" placeholder="lastname"><br><br>
                <input class="inp1" type="number" value="<?php echo $row['age'] ?>"name="age" placeholder="age"><br><br>
                <input class="inp2" type="submit" name="update_btn" value="Update">
                <button class="two"><a href="view.php">Back</a></button>

            </form>
        </div>
</body>
</html> 

    <?php
    if (isset($_POST['update_btn'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];

        $update = "UPDATE student SET firstname='$fname', lastname='$lname', age='$age' WHERE id='$id'";
        $data = mysqli_query($con, $update);

    if($data){
        //echo"Data updated successfully";
        ?>
            <script type="text/javascript">
                alert("Data updated successfully");
                window.open("http://localhost/WEBSITE/Demo/view.php","_self");
            </script>
        <?php
        
    }

    else{
        //echo"Please try again";
        ?>
            <script type="text/javascript">
                alert("Please try again");
            </script>
    <?php
        
    }


    

    }
    ?>
