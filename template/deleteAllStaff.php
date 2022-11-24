<div>
    <h1>Xóa nhân viên</h1>
    <form method="get" action="../controller/NhanVienController.php">
        <input type="hidden" name="controller" value="deleteAllNV">
        <table id="nhan_vien">
            <thead>
                <th>ID nhân viên</th>
                <th>Tên nhân viên</th>
                <th>Phòng Ban</th>
                <th>Địa chỉ</th>
                <th>Xóa</th>
            </thead>
            <tbody>
                <?php
                foreach ($dsnhanvien as $nhanvien) {
                ?>
                    <tr>
                        <td><?= $nhanvien[0] ?></td>
                        <td><?= $nhanvien[1] ?></td>
                        <td><?= $nhanvien[2] ?></td>
                        <td><?= $nhanvien[3] ?></td>
                        <td><input type="checkbox" name="<?= $nhanvien[0]?>" value="<?= $nhanvien[0]?>"></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td><button type="submit">Xóa</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>