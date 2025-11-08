<?php 

/**
 * Hotels travel class
 */

class Hotelstravel
{
 use Controller;

    public function index()
    {
        // Check if session is set and retrieve the username/email
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        // Load the hotels travel view with data
        $this->view('hotelstravel', $data);
    }

    public function getAllHotelstravel()
    {
        $query = "SELECT * FROM hotelstravel";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Return as an array of objects
    }

}
