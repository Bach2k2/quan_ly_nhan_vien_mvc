<head>
    <style>
        .Diachi {
            width: 80%;
            height: 200px;
            font-size: 14px;
            line-height: 18px;
            border: 1px solid #dddddd;
            padding: 10px;
        }
    </style>

</head>
<!-- <body></body> -->
<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa thông tin nhân viên</h1>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="NhanVienController.php" enctype="multipart/form-data">
                <input type="hidden" name="controller" value="updateNV">
                <div class="card-body">
                    <div class="form-group">
                        <label>IDNV</label>
                        <input type="text" required="required" name="IDNV" class="form-control" value="<?= $nhanvien[0] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input type="text" required="required" name="TenNV" class="form-control" value="<?= $nhanvien[1] ?>">
                    </div>
                    <div class="form-group">
                        <label>Phòng ban</label><br>
                        <select name="IDPB" class="form-control select2">
                            <option value="<?php echo $nhanvien[2] ?>" selected> <?= $nhanvien[2] ?></option>
                            <?php
                            print_r($dsphongban);
                            foreach ($dsphongban as $phongban) {
                                $str = '<option value="' . $phongban['IDPB'] . '">' . $phongban['Tenpb'] . '</option>';
                                echo $str;
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <div class="input-group">
                            <textarea required="required" name="Diachi" id="Diachi" class="textarea" value="<?= $nhanvien[3] ?>">
                        </textarea>
                            <?php
                            // Phải làm thế này mới chịu
                            echo '<script>document.getElementById("Diachi").value ="' . $nhanvien[3] . '";</script>'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update"/>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>