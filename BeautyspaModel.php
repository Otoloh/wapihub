<?php


class BeautyspaModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllBeautyspa() {
        $stmt = $this->conn->prepare("SELECT * FROM beautyspa");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
