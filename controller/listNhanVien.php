<?php
class ListPhongBan
{
    public function __construct()
    {
        require_once('./model/PhongBanModel.php');  
        $phongBanModel=new PhongBanModel();
        $dsPhongBan=$phongBanModel->getAllPhongBan();
        require('./view/department/list.php');
        Header('Location: ./view/department/list.php');
    }
}
?>
