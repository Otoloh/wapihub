<?php


class HomeservicesModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllHomeservices() {
        $stmt = $this->conn->prepare("SELECT * FROM homeservices");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
