<?php


class HotelstravelModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllHotelstravel() {
        $stmt = $this->conn->prepare("SELECT * FROM hotelstravel");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
