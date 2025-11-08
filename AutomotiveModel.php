<?php


class AutomotiveModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllAutomotive() {
        $stmt = $this->conn->prepare("SELECT * FROM automotive");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
