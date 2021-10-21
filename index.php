<?php include('header.php');?>
<div class="row">
                </div>
                <div class="col-md-12 ">
                    <!--Trang chủ sẽ hiển thị như thế nào?Tất cả danh bạ người dùng(dưới dạng BẢNG) và có phân trang-->
    
                    <a href="add.php" class="btn btn-success">Thêm</a>
 
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Mã người hiến máu</th>
                            <th scope="col">Tên người hiến máu</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Ngày đăng kí hiến máu</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col"><a href="edit.php"></a>Sửa</th>
                            <th scope="col"><a href="delete.php"></a>Xóa</th>
                            </tr>
                        </thead>
                        <?php
                                //lấy dữ liệu từ CSDL và để ra bảng (phần lặp lại)
                                //bước 1:kết nối tời csdl(mysql)
                                $conn = mysqli_connect('localhost','root','','project02');
                                if(!$conn){
                                    die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                                }

                                //bước 2 khai báo câu lệnh thực thi và thực hiện truy vấn
                                $sql = "SELECT bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno FROM db_nguoidung   ";
                                $result = mysqli_query($conn,$sql);

                                //bước 3 xử lý kết quả trả về
                                if(mysqli_num_rows($result) > 0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            <th scope="row"><?php echo $i; ?> </th>
                            <td><?php echo $row['bd_name']; ?> </td>
                            <td><?php echo $row['bd_sex']; ?> </td>
                            <td><?php echo $row['bd_age']; ?> </td>
                            <td><?php echo $row['bd_bgroup']; ?> </td>
                            <td><?php echo $row['bd_reg_date']; ?> </td>
                            <td><?php echo $row['bd_phno']; ?> </td>
                            <td><a href="edit.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php
                                $i++;
                                }
                            }
                            ?>
                            
                        </tbody>
                        </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>   
</body>
</html>