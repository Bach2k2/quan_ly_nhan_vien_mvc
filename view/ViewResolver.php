<?php
class ViewResolver{
    public function showAllStaff($dsNhanVien)
    {
        require_once('../template/staffList.php');
    }
    public function showAllDepartment($dsPhongBan)
    {
        require_once('../template/departmentList.php');
    }
    public function showInsertNVForm($dsPhongBan)
    {
        require_once('../template/insertStaffForm.php');
    }
    public function showEditNVForm($nhanvien,$dsphongban)
    {
        require_once('../template/editStaffForm.php');
     //   print_r($nhanvien);
     //print_r($dsphongban);
    }
    
    public function showEditPBForm($phongban)
    {
        require_once('../template/editDepartmentForm.php');
     //   print_r($nhanvien);
     //print_r($dsphongban);
    }

}