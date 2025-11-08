<?php


class NightlifeModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllNightlife() {
        $stmt = $this->conn->prepare("SELECT * FROM nightlife");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
