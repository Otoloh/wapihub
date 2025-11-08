<?php 

/**
 * Categories class
 */

class Autoservices
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the auto services view with data
        $this->view('autoservices', $data);
    }

    public function getAllAutoservices()
    {
        $query = "SELECT * FROM autoservices";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
