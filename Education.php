<?php 

/**
 * Education class
 */

class Education
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the education view with data
        $this->view('education', $data);
    }

    public function getAllEducation()
    {
        $query = "SELECT * FROM education";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
