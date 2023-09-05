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
<div class="four">
    <a href="Index.php">Home</a>
    <table border="1">
        <h1>Registered Students</h1>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php
        $query = "SELECT * FROM student";
        $data = mysqli_query($con, $query);
        $result = mysqli_num_rows($data);
        if ($result) {
            while ($row = mysqli_fetch_array($data)) {
        ?>
                <tr>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td class="c1"><a href="Update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td class="c2"><a onclick="return confirm('Are you sure you want to delete?')" href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td>No record found</td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
</body>

</html>