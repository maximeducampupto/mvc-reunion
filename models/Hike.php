<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 04-Feb-19
 * Time: 12:54 PM
 */

require('../database/Database.php');

class Hike
{
    private $conn, $hikesList;

    public function __construct()
    {
        $this->conn = Database::conn();

        $statement = $this->conn->query('select * from hiking');
        $this->hikesList = $statement->fetchAll(PDO::FETCH_OBJ);


    }

    public function getAll()
    {
        return $this->hikesList;
    }

    public function create($params = [])
    {
        extract($params);
        $query =
            "
            insert into hiking 
            (name, difficulty, distance, duration, height_difference, available) 
            VALUES (:name, :difficulty, :distance, :duration, :height_difference, :available)";

       $this->conn->prepare($query)->execute([
            'name' => $name,
            'difficulty' => $difficulty,
            'distance' => $distance,
            'duration' => $duration,
            'height_difference' => $height_difference,
            'available' => $available
        ]);

       header('Location: index.php?controller=rando&action=index');
    }

    public function delete($id)
    {
        $query = "delete from hiking where id=:id";
        $statement = $this->conn->prepare($query);

        $statement->execute(['id' => $id]);

        header('Location: index.php?controller=rando&action=index');
    }

    public function update($id, $params = [])
    {
        if ($params) { extract($params); }

        $query =
            "update hiking set 
             name=?, difficulty=?, distance=?, duration=?, height_difference=?, available=?
             where id=?";
        $this->conn->prepare($query)->execute([
            $name, $difficulty, $distance, $duration, $height_difference, $available, $id
        ]);

        header('Location: index.php?controller=rando&action=index');
    }

    public function find($id)
    {
        $statement = $this->conn->prepare("select * from hiking where id=:id");
        $statement->execute(['id' => $id]);

        return $statement->fetch(PDO::FETCH_OBJ);
    }
}