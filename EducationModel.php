<?php


class EducationModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllEducation() {
        $stmt = $this->conn->prepare("SELECT * FROM education");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}