<?php


class MassmediaservicesModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllMassmediaservices() {
        $stmt = $this->conn->prepare("SELECT * FROM massmediaservices");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
