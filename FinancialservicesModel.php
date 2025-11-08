<?php


class FinancialservicesModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllFinancialservices() {
        $stmt = $this->conn->prepare("SELECT * FROM financialservices");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
