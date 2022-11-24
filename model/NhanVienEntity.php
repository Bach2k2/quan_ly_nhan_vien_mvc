<?php
    class NhanVien {
        public $idnv;
        public $tennv;
        public $phongban;
        public $diachi;

        public function __construct($idpb=null,$name=null,$phongban=null,$diachi=null)
        {
            $this->$idpb=$idpb;
            $this->$name=$name;
            $this->$phongban=$phongban;
            $this->$diachi=$diachi;
        }
        public function getIDNV()
        {
            return $this->idnv;
        }
    }
?>