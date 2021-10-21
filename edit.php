<?php include('header.php') ?>
<main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sửa danh bạ</h2>
                    
                    <form action="process_edit.php" method="POST" class="mb-4" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="txtname" class="col-sm-2 col-form-label">Tên nhân viên</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="txtname" name="txtname" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtsex" class="col-sm-2 col-form-label">Giới tính</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="txtsex" name="txtsex" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtgroup" class="col-sm-2 col-form-label">Nhóm máu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="txtgroup" name="txtgroup" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtdate" class="col-sm-2 col-form-label">Ngày đăng kí</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="txtdate" name="txtdate" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtphno" class="col-sm-2 col-form-label">Số di động</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="txtphno" name="txtphno">
                            </div>
                        </div>

                        
                        <div class="col">

                            Select image to upload
                            <br>
                            <input type="file" name="fileToUpload" id="fileToUpload"></br>
                            <div>
                                <img src="<?php echo $row['avatar'] ?>" alt="">
                            </div>

                        </div>

                        
                        <div>
                            <button type="submit" class="add" name="btnSave" class="btn btn-primary">Sửa</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </main>