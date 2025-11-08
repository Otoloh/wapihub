<?php


class ShoppingModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllShopping() {
        $stmt = $this->conn->prepare("SELECT * FROM shopping");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
