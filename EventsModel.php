<?php

class EventsModel
{
    use Model;

    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    /**
     * Fetch all events from the database
     */
    public function getAllEvents()
    {
        $stmt = $this->conn->prepare("SELECT * FROM events ORDER BY date ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Fetch a single event by its ID
     */
    public function getEventById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM events WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Add a new event to the database
     */
    public function createEvent($data)
    {
        $stmt = $this->conn->prepare("
            INSERT INTO events (title, description, location, date, image) 
            VALUES (:title, :description, :location, :date, :image)
        ");
        return $stmt->execute([
            ':title' => $data['title'],
            ':description' => $data['description'],
            ':location' => $data['location'],
            ':date' => $data['date'],
            ':image' => $data['image'],
        ]);
    }

    /**
     * Update an existing event
     */
    public function updateEvent($id, $data)
    {
        $stmt = $this->conn->prepare("
            UPDATE events 
            SET title = :title, description = :description, location = :location, date = :date, image = :image 
            WHERE id = :id
        ");
        return $stmt->execute([
            ':id' => $id,
            ':title' => $data['title'],
            ':description' => $data['description'],
            ':location' => $data['location'],
            ':date' => $data['date'],
            ':image' => $data['image'],
        ]);
    }

    /**
     * Delete an event from the database
     */
    public function deleteEvent($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM events WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
