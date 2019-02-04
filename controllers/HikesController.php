<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 04-Feb-19
 * Time: 12:53 PM
 */

class HikesController
{
    private $model;

    public function __construct()
    {
        $this->model = new Hike();
    }

    public function index()
    {
        $hikesList = $this->model->getAll();
        include('../views/hikes.index.php');
    }

    public function create()
    {
        include('../views/hikes.create.php');
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->delete($id);
        } else {
            $this->index();
        }
    }

    public function update()
    {
        include('../views/hikes.update.php');
    }
}