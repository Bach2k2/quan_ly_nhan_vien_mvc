<?php
class ListPhongBan
{
    public function __construct()
    {
        require_once('./model/PhongBanModel.php');  
        $phongBanModel=new PhongBanModel();
        $dsPhongBan=$phongBanModel->getAllPhongBan();
        require('../view/staff/list.php');
        Header('Location: ../view/staff/list.php');
    }
}
?>
