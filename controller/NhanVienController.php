<?php
class NhanVienController
{
    public $request = NULL;
    public $post = NULL;
    public function __construct()
    {
        if (isset($_GET['controller'])) $request = $_GET['controller'];
        if (isset($_POST['controller'])) $post = $_POST['controller'];
    }
    public function showStaffList()
    {
        require_once('../model/NhanVienModel.php');
        $nhanVienModel = new NhanVienModel();
        $dsNhanVien = $nhanVienModel->getAllNhanVien();
        require_once('../template/staffList.php');
        require('../view/ViewResolver.php');
        $viewResolver = new ViewResolver();
        $viewResolver->showAllStaff($dsNhanVien);
        // Header('Location: ../view/staff/list.php');
    }
    public function showinsertStaffForm()
    {
        require_once('../model/PhongBanModel.php');
        $phongBanModel = new PhongBanModel();
        $dsPhongBan = $phongBanModel->getAllPhongBan();
        require_once('../template/insertStaffForm.php');
        // require('../view/ViewResolver.php');
        // $viewResolver=new ViewResolver();
        // $viewResolver->showInsertNVForm($dsPhongBan);

    }
    public function addStaff()
    {
        require_once('../model/NhanVienModel.php');
        $nhanVienModel = new NhanVienModel();
        $IDNV = $_POST['IDNV'];
        echo $IDNV;
        $TenNV = $_POST['TenNV'];
        echo $TenNV;
        $IDPB = $_POST['IDPB'];
        echo 'IDPB=' . $IDPB;
        $Diachi = $_POST['Diachi'];
        echo $Diachi;
        echo 'hiMN';
        $nhanVienModel->addNhanVien($IDNV, $TenNV, $IDPB, $Diachi);
        //  require('../template/insertStaffForm.php');
        $this->showinsertStaffForm();
        echo '<script type="text/java">alert("Them moi thanh cong");<script>';
    }

    public function showEditStaffList() // Hien thi danh sach update nhan vien
    {
        require_once('../model/NhanVienModel.php');
        $nhanVienModel = new NhanVienModel();
        $dsNhanVien = $nhanVienModel->getAllNhanVien();
        // require_once('../template/staffList.php');
        // require('../view/ViewResolver.php');
        // $viewResolver = new ViewResolver();
        // $viewResolver->showAllStaff($dsNhanVien);
        require_once('../template/editStaffList.php');

        // require('../view/ViewResolver.php');
        // $viewResolver=new ViewResolver();
        // $viewResolver->showInsertNVForm($dsPhongBan);

    }
    public function showEditStaffForm($idnv)
    {
        include_once('../model/NhanVienModel.php');
        $nhanVienModel = new NhanVienModel();

        $nhanvien = $nhanVienModel->getNhanVienById($idnv);
        print_r($nhanvien);
        include_once('../model/PhongBanModel.php');
        $phongBanModel = new PhongBanModel();
        $dsPhongBan = $phongBanModel->getAllPhongBan();
        require_once('../template/editStaffForm.php');
        require('../view/ViewResolver.php');
        $viewResolver = new ViewResolver();
        $viewResolver->showEditNVForm($nhanvien, $dsPhongBan);
    }
    public function editStaff()
    {
        require_once('../model/NhanVienModel.php');
        $nhanVienModel = new NhanVienModel();
        $IDNV = $_POST['IDNV'];
        echo $IDNV;
        $TenNV = $_POST['TenNV'];
        echo $TenNV;
        $IDPB = $_POST['IDPB'];
        echo 'IDPB=' . $IDPB;
        $Diachi = $_POST['Diachi'];
        echo $Diachi;
        echo 'hiMN';
        $nhanVienModel->editNhanVien($IDNV, $TenNV, $IDPB, $Diachi);
        //  require('../template/insertStaffForm.php');
        $this->showinsertStaffForm();
        echo '<script type="text/java">alert("Them moi thanh cong");<script>';
    }
    public function showDeleteStaffList()
    {
        include_once('../model/NhanVienModel.php');
        $nhanVienModel = new NhanVienModel();
        $dsnhanvien = $nhanVienModel->getAllNhanVien();
        require_once('../template/DeleteAllStaff.php');
    }
    
    public function deleteStaff()
    {
        include_once('../model/NhanVienEntity.php');
        include_once('../model/NhanVienModel.php');
        $nhanVienModel = new NhanVienModel();
        $dsnhanvien = $nhanVienModel->getAllNhanVien();
        foreach ($dsnhanvien as $nhanvien) {
           // print_r($nhanvien);
            if(isset($_GET[$nhanvien[0]]))
            {
                $IDNV = $_GET[$nhanvien[0]];
                echo $IDNV;
                $nhanVienModel->deleteNhanVien($IDNV);
                // De goi thuoc tinh IDNV: $nhanvien['IDNV'] ko hieu. || $nhanvien->getIDNV()  ko dc vi nhanvien la array
                   
            }        
        }
    }
    public function showSearchForm()
    {
        require_once('../template/searchForm.php');
    }
    public function invoke()
    {
        if (isset($_GET['controller'])) {
            $this->request = $_GET['controller'];
            switch ($this->request) {
                case 'listNV':
                    $this->showStaffList();
                    // require_once('../view/staff/list.php');
                    // Header('Location: ../template/staffList.php');
                    break;
                case 'insertNV':
                    $this->showinsertStaffForm();
                    // require_once('../view/staff/list.php');
                    // Header('Location: ../template/staffList.php');
                    break;
                case 'updateNV':
                    $this->showEditStaffList();
                    // if (isset($_GET['IDNV']))
                    // $idnv=$_GET['IDNV'];
                    //     $this->showEditStaffForm($idnv);
                    // require_once('../view/staff/list.php');
                    // Header('Location: ../template/staffList.php');
                    break;
                case 'getNV':
                    $idnv = $_GET['IDNV'];
                    echo $idnv;
                    $this->showEditStaffForm($idnv);
                    break;
                case 'showDeleteNV':
                    $this->showDeleteStaffList();
                    break;
                case 'deleteNV':
                    $this->deleteStaff();
                    require_once('../template/editStaffList.php');
                    break;
                case 'deleteAllNV':
                    $this->deleteStaff();
                    $this->showDeleteStaffList();
                    break;
                    case 'search':
                        $this->showSearchForm();
                        break;
                default:
                echo 'ERROR 404';
              
            }
        }
        if (isset($_POST['controller'])) {
            $this->post = $_POST['controller'];
            switch ($this->post) {
                case 'insertNV':
                    echo $this->addStaff();
                    // require_once('../view/staff/list.php');
                    // Header('Location: ../template/staffList.php');
                    break;
                case 'updateNV':
                    $this->editStaff();
                    break;
                default:
            }
        }
    }
}
$controller = new NhanVienController();
$controller->invoke();
