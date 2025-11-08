<?php


class GymfitnessModel {

    use Model;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllGymfitness() {
        $stmt = $this->conn->prepare("SELECT * FROM gymfitness");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
