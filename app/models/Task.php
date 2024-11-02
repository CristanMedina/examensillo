<?php
class Task {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllTasks() {
        //Esta consulta esta iniciada pero no dice que hacer
        $sql = "SELECT * FROM tasks";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTaskById($id) {
        $sql = "SELECT * FROM tasks WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createTask($title, $description) {
        $sql = "INSERT INTO tasks (title, description) VALUES (:title, :description)";
        // Falto preparar la ejecucuion en la base de datos
        $stmt = $this->db->prepare($sql);
        // Se deben poner los campos correctos de la base de datos
        $stmt->execute(['title' => $title, 'description' => $description]);
    }

    public function updateTask($id, $title, $description) {
        // Falto acompletar la consulta
        $sql = "UPDATE tasks SET title = :title, description = :description WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        // El campo "task_name" debe ser title
        $stmt->execute(['id' => $id, 'title' => $title, 'description' => $description]);
    }

    // Falto poner la variable $id
    public function deleteTask($id) {
        $sql = "DELETE FROM tasks WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

}
