<?php 

/**
 * Event planning class
 */

class Eventplanningservices
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the event planning services view with data
        $this->view('eventplanningservices', $data);
    }

    public function getAllEventplanningservices()
    {
        $query = "SELECT * FROM eventplanningservices";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}

