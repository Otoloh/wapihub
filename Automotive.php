<?php 

/**
 * Automotive class
 */

class Automotive
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the automotive view with data
        $this->view('automotive', $data);
    }

    public function getAllAutomotive()
    {
        $query = "SELECT * FROM automotive";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
