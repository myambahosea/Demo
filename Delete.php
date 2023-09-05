<?php include 'connection.php';
$id = $_GET['id'];
$delete = "DELETE FROM student WHERE id='$id'";
$data = mysqli_query($con, $delete);
if($data){
    ?>
        <script type="text/javascript">
            alert("Data deleted successfully")
            window.open("http://localhost/WEBSITE/Demo/view.php","_self");
        </script>
    <?php
}
else{
    ?>
        <script type="text/javascript">
            alert("Please try again")
        </script>
    <?php
}
?>
