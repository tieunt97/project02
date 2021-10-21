<?php

if (isset($_POST['btnSave']))
//kiểm tra 
{
    // Button Clicked
    //echo "Button Clicked";

    //1. Get the Data from form
    $bd_id = $_POST['textid'];
    $bd_name = $_POST['txtname'];
    $bd_sex = $_POST['txtsex'];
    $bd_age = $_POST['txtsomayban'];
    $bd_bgroup = $_POST['txtgroup'];
    $bd_reg_date = $_POST['txtdate'];
    $bd_phno = $_POST['txtphno'];
   
    include('config/constants.php');
    //Create a SQL Query to Update Admin
    $sql = "UPDATE db_nguoidung SET
            bd_name= '$db_name',
            bd_sex = '$bd_sex',
            bd_age = '$bd_age',
            bd_bgroup= '$bd_bgroup',
            bd_reg_date = '$bd_reg_date',
            bd_phno = '$bd_phno',

            WHERE db_nguoidung.manv = '$manv'";

  
    //Execute the Query
    $res = mysqli_query($conn, $sql);
     
    if ($res == TRUE) {
        $_SESSION['noti'] = "Sửa thành công";
        header("location:" . SITEURL . 'index.php');
    } else {
        $_SESSION['noti'] = "Sửa không thành công";
        header("location:" . SITEURL . 'index.php');
    }
}
?>
<?php 


//Include constants.php file here
include('constants.php');

// 1. 
$bd_id = $_GET['bd_id'];

//2. Create SQL Query to Delete 

$sql = "DELETE FROM blood_donor WHERE  bd_id='$bd_id'";

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
    header("location: error.php");
}
?>
