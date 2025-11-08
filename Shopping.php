<?php 

/**
 * Shopping class
 */

class Shopping
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the shopping view with data
        $this->view('shopping', $data);
    }

    public function getAllShopping()
    {
        $query = "SELECT * FROM shopping";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}