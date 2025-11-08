<?php


class ProfessionalservicesModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllProfessionalservices() {
        $stmt = $this->conn->prepare("SELECT * FROM professionalservices");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
