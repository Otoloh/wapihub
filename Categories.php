<?php 

/**
 * Categories class
 */

class Categories
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the categories view with data
        $this->view('categories', $data);
    }

    public function getAllCategories()
    {
        $query = "SELECT * FROM categories";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
