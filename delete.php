<?php
include('config/constants.php');
$bd_id = $_GET['bd_id'];

//2. Create SQL Query to Delete 

$sql = "DELETE FROM db_nguoidung WHERE  bd_id='$bd_id'";

//Execute the Query
$res = mysqli_query($conn, $sql);

// Check whether the query executed successfully or not
if($res==true)
{
   $_SESSION['delete'] = "<div class='danger'>xoa thanh cong.</div>";
    header("location: index.php");
}
else
{
    $_SESSION['delete'] = "<div class='error'>xoa that bai.</div>";
    header("location: index.php");
}
?>
