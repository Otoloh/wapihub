<?php


class LocalservicesModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllLocalservices() {
        $stmt = $this->conn->prepare("SELECT * FROM localservices");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
