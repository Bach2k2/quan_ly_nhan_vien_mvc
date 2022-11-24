<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm bài viết</h1>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form name="insertNVForm" method="post" action="NhanVienController.php">
                <input type="hidden" name="controller" value="insertNV">
                <div class="card-body">
                    <div class="form-group">
                        <label>IDNV</label>
                        <input type="text" required="required" name="IDNV" class="form-control" placeholder="ex: NV0xx">
                    </div>
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input type="text" required="required" name="TenNV" class="form-control" placeholder="Nhap ten nhan vien">
                    </div>
                    <div class="form-group">
                        <label>Phòng ban</label>
                        <select name="IDPB" class="form-control select2">
                            <?php
                            foreach($dsPhongBan as $phongban)
                            {
                                ?>
                                    <option value="<?=$phongban[0]?>"><?=$phongban[1]?></option>
                                <?php
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea required="required" name="Diachi" class="textarea" placeholder="Ghi rõ thông tin địa chỉ"
                          style="width: 80%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <button type="submit" name="addStaff" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </section>
</div>