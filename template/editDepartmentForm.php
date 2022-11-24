<head>
    <style>
        .Mota {
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
                    <h1 class="m-0 text-dark">Cập nhât thông tin phòng ban</h1>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="PhongBanController.php" enctype="multipart/form-data">
                <input type="hidden" name="controller" value="updatePB">
                <div class="card-body">
                    <div class="form-group">
                        <label>IDPB</label>
                        <input type="text" required="required" name="IDPB" class="form-control" value="<?= $phongban[0] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tên phòng ban</label>
                        <input type="text" required="required" name="TenPB" class="form-control" value="<?= $phongban[1] ?>">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <div class="input-group">
                            <textarea required="required" name="Mota" id="Mota" class="textarea" value="<?= $nhanvien[3] ?>">
                        </textarea>
                            <?php
                            // Phải làm thế này mới chịu
                            echo '<script>document.getElementById("Mota").value ="' . $phongban[2] . '";</script>'
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