<?php


class DB {
    protected $db_name = 'test';
    protected $db_user = 'root';
    protected $db_pass = 'password';
    protected $db_host = 'localhost';

    public function connect() {
        $connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
}