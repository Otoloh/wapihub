<?php


class RestaurantsModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllRestaurants() {
        $stmt = $this->conn->prepare("SELECT * FROM restaurants");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
