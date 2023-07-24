<?php

include_once('db.php');
class DataModel {
    public function insert($data) {
        $db = new DB();
        $connection = $db->connect();
        $safe_data = mysqli_real_escape_string($connection, $data);
        $sql = "INSERT INTO data_table (data) VALUES ('{$safe_data}')";
        mysqli_query($connection, $sql);
        return mysqli_insert_id($connection);
    }
    public function get($id) {
        $db = new DB();
        $connection = $db->connect();
        $safe_id = mysqli_real_escape_string($connection, $id);
        $sql = "SELECT data FROM data_table WHERE id=${safe_id}";
        $result = mysqli_query($connection, $sql);
        return mysqli_fetch_assoc($result)['data'];
    }
}