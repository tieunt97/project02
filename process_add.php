<?php 
    if(isset($_POST['btnSave'])){
        $bd_id = $_POST['txtid'];
        $db_name = $_POST['txtname'];
        $db_sex = $_POST['txtsex'];
        $db_age = $_POST['txtage'];
        $db_bgroup = $_POST['txtgroup'];
        $db_reg_date = $_POST['txtdate'];
        $db_phno = $_POST['txtphno'];
        
       
        require('config/constants.php');
        
        $sql = "INSERT INTO blood_donor(bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno) 
        VALUES (NULL,'$bd_name','$bd_sex','$bd_age','$bd_bgroup','$bd_reg_date','$bd_phno')";
    
    //3. Executing Query and Saving Data into Datbase
    $res = mysqli_query($conn, $sql);

    //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
    if ($res == TRUE) {
        //Data Inserted

        //Create a Session Variable to Display Message
        $_SESSION['add'] = "<div class='danger'>thêm thành công</div>";
        header("location: index.php");
    } else {

        $_SESSION['add'] = "<div class='error'>không hợp lệ</div>";
        //Redirect Page to Add Admin
        header("location: add.php");
    }
 
    }
    
   
