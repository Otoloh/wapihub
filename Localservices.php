<?php 

/**
 * Local services class
 */

class Localservices
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the local services view with data
        $this->view('localservices', $data);
    }

    public function getAllLocalservices()
    {
        $query = "SELECT * FROM localservices";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
