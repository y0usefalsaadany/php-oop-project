<?php
namespace Config;
final class DbSetting
{
    public $hostname = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbName = 'oop';
    public function connect()
    {
        return mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName);
    }
}
