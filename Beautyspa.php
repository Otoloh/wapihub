<?php 

/**
 * Beauty spa class
 */

class Beautyspa
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the beauty spa view with data
        $this->view('beautyspa', $data);
    }

    public function getAllBeautyspa()
    {
        $query = "SELECT * FROM beautyspa";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
