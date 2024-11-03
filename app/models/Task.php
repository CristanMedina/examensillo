<?php
class Task {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    //Consultas incompletas
    public function getAllTasks(): array {
        $sql = "SELECT * FROM tasks";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTaskById(int $id): ?array {
        $sql = "SELECT * FROM tasks WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createTask(string $title, string $description): bool {
        $sql = "INSERT INTO tasks (title, description) VALUES (:title, :description)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['title' => $title, 'description' => $description]);
    }

    public function updateTask(int $id, string $title, string $description): bool {
        $sql = "UPDATE tasks SET title = :title, description = :description WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['id' => $id, 'title' => $title, 'description' => $description]);
    }

    public function deleteTask(int $id): bool {
        $sql = "DELETE FROM tasks WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
