<?php 

/**
 * Restaurants class
 */

class Restaurants
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the restaurants view with data
        $this->view('restaurants', $data);
    }

    public function getAllRestaurants()
    {
        $query = "SELECT * FROM restaurants";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}



