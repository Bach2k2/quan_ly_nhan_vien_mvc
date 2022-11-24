<?php
class Database
{
    public $conn = NULL;
    private $server = 'localhost'; // nmodified + ame= value;
    private $dbname = 'DULIEU';
    private $username = 'root';
    private $pass = '';
    public function Connect()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->pass, $this->dbname); // PHP not call this defaultly;
        if ($this->conn->connect_error) {
            printf($this->conn->connect_error);
        }
        $this->conn->set_charset('utf8'); // charset= VN
    }
    public function Close()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
