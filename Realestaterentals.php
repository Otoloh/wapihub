<?php 

/**
 * Realestate class
 */

class Realestaterentals
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the real estate view with data
        $this->view('realestaterentals', $data);
    }

    public function getAllRealestaterentals()
    {
        $query = "SELECT * FROM realestaterentals";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
