<?php
    include_once('../model/PhongBanEntity.php');
    require_once('../model/Database.php');
    $db=new Database;// Khong can dau ()
    $db->Connect();
    class PhongBanModel{
        public $dsphongBan;
        public function __construct()
        {
            $this->db=new Database();
            $this->db->Connect();
            
        }
        public function getAllPhongBan()// no need Datatype return;
        {
            // $link=mysqli.connect('localhost','root','');
            // $db_selected=mysqli_select_db($link,'DULIEU');
            $query='SELECT * FROM Phongban';
           // $rs=mysqli_query($this->db,$query);
            $rs=$this->db->conn->query($query);
            $dsphongBan=array();
            while($row=mysqli_fetch_row($rs))
            {
               // PhongBan pb=new PhongBan($row['idpb'],$row['tenpb'],$row['mota']);
               $dsphongBan[]=$row;
            }
            return $dsphongBan;
        }
        public function getPhongBanById($IDPB)
        {
            // return $this->dsphongBan['$idpb'];
            $IDPB = $this->db->conn->real_escape_string($IDPB);
            $sql_query = "SELECT * FROM Phongban Where IDPB='$IDPB'";
            // $rs=mysqli_query($this->db,$query);
            echo '<script type="text/javascript">' .
            'console.log("' . $sql_query . '");</script>';
            $result= $this->db->conn->query($sql_query);
            print_r($result);
            $phongban= mysqli_fetch_row($result);
            return $phongban;
        }
        public function editPhongBan($IDPB, $TenPB,$Mota)
        {
            $IDPB = $this->db->conn->real_escape_string($IDPB);
            $TenPB= $this->db->conn->real_escape_string($TenPB);
            $Mota = $this->db->conn->real_escape_string($Mota);
           
            $sql = "UPDATE Phongban set Tenpb='$TenPB', Mota=' $Mota' Where IDPB='$IDPB'"; // VIet hoa tu khoa??
            echo $sql;
            echo '<script type="text/javascript">' .
                'console.log(' . $sql . ');</script>';
            return $this->db->conn->query($sql);
        }
    }
    ?>