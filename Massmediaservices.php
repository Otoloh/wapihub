<?php 

/**
 * Mass media class
 */

class Massmediaservices
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the Mass media view with data
        $this->view('massmediaservices', $data);
    }

    public function getAllMassmediaservices()
    {
        $query = "SELECT * FROM massmediaservices";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
