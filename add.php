<?php include('header.php') ?>
<main class="mt-4">
    <div class="container">
        <div class=" row">
            <div class="col-md-12">
                <h2>Thêm thông tin Người tình nguyện hiến máu</h2>
                <form action="process_add.php" method="POST">
                    <div class="row mb-3">
                        <label for="txtname" class="col-sm-2 col-form-label">Tên người hiến máu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtname" name="txtname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtsex" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtsex" name="txtsex">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtage" class="col-sm-2 col-form-label">Năm sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtage" name="txtage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtgroup" class="col-sm-2 col-form-label">Nhóm máu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtgroup" name="txtgroup">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtdate" class="col-sm-2 col-form-label">Ngày đăng kí</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtdate" name="txtdate">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtphone" class="col-sm-2 col-form-label">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtphone" name="txtphone">
                        </div>
                    </div>
                   
                    


                    <button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
                </form>
            </div>

        </div>
    </div>
</main>

</body>

</html>