<?php


class AutoservicesModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllAutoservices() {
        $stmt = $this->conn->prepare("SELECT * FROM autoservices");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
