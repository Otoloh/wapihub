<?php 

/**
 * nightlife class
 */

class Nightlife
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the nightlife view with data
        $this->view('nightlife', $data);
    }

    public function getAllNightlife()
    {
        $query = "SELECT * FROM nightlife";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
