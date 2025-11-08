<?php


class RealestaterentalsModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllRealestaterentals() {
        $stmt = $this->conn->prepare("SELECT * FROM realestaterentals");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
