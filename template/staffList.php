<div>
    <h1>Danh sách Nhân viên</h1>
        <table id="nhan_vien">
            <thead>
                <th>ID nhân viên</th>
                <th>Tên nhân viên</th>
                <th>Phòng Ban</th>
                <th>Địa chỉ</th>
            </thead>
            <tbody>
                <?php 
                    foreach($dsNhanVien as $nhanvien)
                    {
                ?>
                        <tr>
                            <td><?=$nhanvien[0]?></td>
                            <td><?=$nhanvien[1]?></td>
                            <td><?=$nhanvien[2]?></td>
                            <td><?=$nhanvien[3]?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
</div>