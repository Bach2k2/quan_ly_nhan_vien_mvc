<div>
    <h1>Danh sách phòng ban</h1>
        <table id="phong_ban">
            <thead>
                <th>ID phòng ban</th>
                <th>Tên phòng ban</th>
                <th>Mô tả</th>
            </thead>
            <tbody>
                <?php 
                    foreach($dsPhongBan as $phongban)
                    {
                ?>
                        <tr>
                            <td><?=$phongban[0]?></td>
                            <td><?=$phongban[1]?></td>
                            <td><?=$phongban[2]?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
</div>