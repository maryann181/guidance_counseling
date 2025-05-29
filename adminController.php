<?php
require_once '../connect.php';

class AdminController {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['pass'], $GLOBALS['db']);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function fetchData() {
        $sql = "SELECT * FROM your_table_name"; // Replace 'your_table_name' with the actual table name
        $result = $this->conn->query($sql);
        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>