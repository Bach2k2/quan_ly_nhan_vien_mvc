<?php
class PhongBanController
{
    public $request = NULL;
    public $post = NULL;
    public function __construct()
    {
        //if($this->request=$_GET['controller'];    
    }
    public function showDepartmentList()
    {
        require_once('../model/PhongBanModel.php');
        $phongBanModel = new PhongBanModel();
        $dsPhongBan = $phongBanModel->getAllPhongBan();
        //  require_once('../template/staffList.php');
        require('../view/ViewResolver.php');
        $viewResolver = new ViewResolver();
        $viewResolver->showAllDepartment($dsPhongBan);
        // Header('Location: ../view/staff/list.php');
    }
    public function showEditDepartmentList() // Hien thi danh sach update phòng ban
    {
        include_once('../model/PhongBanModel.php');
        $phongBanModel = new PhongBanModel();
        $dsPhongBan = $phongBanModel->getAllPhongBan();
        require_once('../template/editDepartmentList.php');
        // require('../view/ViewResolver.php');
        // $viewResolver=new ViewResolver();
        // $viewResolver->showInsertNVForm($dsPhongBan);

    }
    public function showEditDepartmentForm($IDPB)
    {
        include_once('../model/PhongBanModel.php');
        $phongBanModel = new PhongBanModel();
        $phongban = $phongBanModel->getPhongBanById($IDPB);
        print_r($phongban);
        require_once('../template/editDepartmentForm.php');
        require('../view/ViewResolver.php');
        $viewResolver = new ViewResolver();
        $viewResolver->showEditPBForm($phongban);
    }
    public function editDepartment()
    {
        include_once('../model/PhongBanModel.php');
        $phongBanModel = new PhongBanModel();
        $IDPB = $_POST['IDPB'];
        $TenPB = $_POST['TenPB'];
        $Mota = $_POST['Mota'];
        echo 'hiMN';
        $phongBanModel->editPhongBan($IDPB, $TenPB,$Mota);
        //  require('../template/insertStaffForm.php');
        echo '<script type="text/java">alert("Cập nhật thành công");<script>';
    }
    public function invoke()
    {
        if (isset($_GET['controller'])) {
            $this->request = $_GET['controller'];
            switch ($this->request) {
                case 'listPB':
                    $this->showDepartmentList();
                    // require_once('../view/staff/list.php');
                    // Header('Location: ../template/staffList.php');
                    break;
                case 'getPB':
                    $idpb = $_GET['IDPB'];
                    echo $idpb;
                    $this->showEditDepartmentForm($idpb);
                    break;
                case 'updatePB':
                    $this->showEditDepartmentList();
                    break;
                default:
                    echo 'ERROR 404';
            }
        }
        if (isset($_POST['controller'])) {
            $this->post = $_POST['controller'];
            switch ( $this->post) {
                case 'updatePB':
                    $this->editDepartment();
                    require('../template/editDepartmentList.php');
                    break;
                default:
                    echo 'ERROR 404';
            }
        }
    }
}
$controller = new PhongBanController();
$controller->invoke();
