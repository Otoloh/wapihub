<?php


class EventplanningservicesModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllEventplanningservices() {
        $stmt = $this->conn->prepare("SELECT * FROM eventplanningservices");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
