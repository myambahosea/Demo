<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
</head>

<body>
    <div>
        <form class="one" action="" method="post">
            <h1>Registration Form</h1><br>
            <input class="inp1" type="text" name="firstname" placeholder="firstname"><br><br>
            <input class="inp1" type="text" name="lastname" placeholder="lastname"><br><br>
            <input class="inp1" type="number" name="age" placeholder="age"><br><br>
            <input class="inp2" type="submit" name="save_btn" value="Save">
            <button class="two"><a href="view.php">View</a></button>
        </form>
    </div>

    <?php
    if (isset($_POST['save_btn'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];

        $query = "INSERT INTO student(firstname,lastname,age) VALUES ('$fname','$lname','$age')";
        $data = mysqli_query($con, $query);

    if($data){

        ?>
            <script type="text/javascript">
                alert("Data saved successfully");
            </script>
        <?php
    }

    else{
        ?>
            <script type="text/javascript">
                alert("Please try again");
            </script>
    <?php
        
    }


    

    }
    ?>



</body>

</html>