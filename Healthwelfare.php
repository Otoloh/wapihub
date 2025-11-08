<?php 

/**
 * Health&Welfare class
 */

class Healthwelfare
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the Health view with data
        $this->view('healthwelfare', $data);
    }

    public function getAllHealthWelfare()
    {
        $query = "SELECT * FROM healthwelfare";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }
}