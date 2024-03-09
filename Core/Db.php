<?php

namespace Core;

use Config\DbSetting;

class Db
{
    public $conn, $table;
    public function __construct()
    {
        $this->conn = (new DbSetting)->connect();
    }
    public function get()
    {
        $sql = "SELECT * FROM $this->table";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
