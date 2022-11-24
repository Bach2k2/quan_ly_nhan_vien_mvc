<?php
include_once('../model/NhanVienEntity.php');
require_once('../model/Database.php');

class NhanVienModel
{
    public $dsnhanVien;
    protected $db; // Khong can dau ()
    //  $this->db->Connect();

    public function __construct()
    {
        $this->db = new Database();
        $this->db->Connect();
    }

    public function getAllNhanVien() // no need Datatype return;
    {
        // $link=mysqli.connect('localhost','root','');
        // $db_selected=mysqli_select_db($link,'DULIEU');
        $sql_query = 'SELECT * FROM Nhanvien';
        // $rs=mysqli_query($this->db,$query);
        $result = $this->db->conn->query($sql_query);
        $dsnhanVien = array();
        while ($row = mysqli_fetch_row($result)) {
            // PhongBan pb=new PhongBan($row['idpb'],$row['tenpb'],$row['mota']);
            $dsnhanVien[] = $row;
        }
        return $dsnhanVien;
    }
    public function getNhanVienById($IDNV)
    {
        /* C1:
        // $this->dsnhanVien=$this->getAllNhanVien();
        // return $this->dsnhanVien[$idnv];
        */
        //c2:
        $IDNV = $this->db->conn->real_escape_string($IDNV);
        $sql_query = "SELECT * FROM Nhanvien Where IDNV='$IDNV'";
        // $rs=mysqli_query($this->db,$query);
        echo '<script type="text/javascript">' .
        'console.log("' . $sql_query . '");</script>';
        $result= $this->db->conn->query($sql_query);
        print_r($result);
        $nhanvien= mysqli_fetch_row($result);
        echo $nhanvien[1];
        return $nhanvien;
    }
    public function addNhanVien($IDNV, $TenNV, $IDPB, $diaChi)
    {
        $IDNV = $this->db->conn->real_escape_string($IDNV);
        $TenNV = $this->db->conn->real_escape_string($TenNV);
        $IDPB = $this->db->conn->real_escape_string($IDPB);
        $diaChi = $this->db->conn->real_escape_string($diaChi);
        $sql = "INSERT INTO Nhanvien (IDNV, Hoten, IDPB, Diachi)
							VALUES ('$IDNV', '$TenNV ', '$IDPB', '$diaChi')";
        echo $sql;
        echo '<script type="text/javascript">' .
            'console.log("' . $sql . '"); </script>';
        return $this->db->conn->query($sql);
    }
    public function editNhanVien($IDNV, $TenNV, $IDPB, $diaChi)
    {
        $IDNV = $this->db->conn->real_escape_string($IDNV);
        $TenNV = $this->db->conn->real_escape_string($TenNV);
        $IDPB = $this->db->conn->real_escape_string($IDPB);
        $diaChi = $this->db->conn->real_escape_string($diaChi);
        $sql = "UPDATE Nhanvien set Hoten='$TenNV', IDPB='$IDPB', Diachi='$diaChi' Where IDNV='$IDNV'"; // VIet hoa tu khoa??
        echo $sql;
        echo '<script type="text/javascript">' .
            'console.log(' . $sql . ');</script>';
        return $this->db->conn->query($sql);
    }

    public function deleteNhanVien($IDNV)
    {
        $IDNV = $this->db->conn->real_escape_string($IDNV);
        $sql = "DELETE From NHANVIEN Where IDNV='$IDNV'";
        echo $sql;
        echo '<script type="text/javascript">' .
            'console.log(' . $sql . ');</script>';
        return $this->db->conn->query($sql);
    }
}
