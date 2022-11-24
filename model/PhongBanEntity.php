<?php
    class PhongBan {
        public $idpb;
        public $tenpb;
        public $mota;

        public function __construct($idpb=null,$name=null,$mota=null)
        {
            $this->$idpb=$idpb;
            $this->$name=$name;
            $this->$mota=$mota;
        }
    }
?>