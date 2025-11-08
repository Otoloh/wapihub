<?php 

/**
 * Professional services class
 */

class Professionalservices
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the Professional services view with data
        $this->view('professionalservices', $data);
    }

    public function getAllProfessionalservices()
    {
        $query = "SELECT * FROM professionalservices";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
