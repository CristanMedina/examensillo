<?php
require_once __DIR__ . '/../../config/config.php';

class TaskController {
    private Task $taskModel;
    private string $baseUrl;

    public function __construct(PDO $db) {
        $this->taskModel = new Task($db);
        $this->baseUrl = BASE_URL;
    }

    public function index(): void {
        $tasks = $this->taskModel->getAllTasks();
        include __DIR__ . '/../views/index.php';
    }

    public function edit(int $id): void {
        $task = $this->taskModel->getTaskById($id);
        include __DIR__ . '/../views/edit.php';
    }

    public function update(int $id, string $title, string $description): void {
        $this->taskModel->updateTask($id, $title, $description);
        header("Location: " . $this->baseUrl . "index.php");
        exit();
    }

    public function delete(int $id): void {
        $this->taskModel->deleteTask($id);
        header("Location: " . $this->baseUrl . "index.php");
        exit();
    }

    public function create(string $title, string $description): void {
        $this->taskModel->createTask($title, $description);
        header("Location: " . $this->baseUrl . "index.php");
        exit();
    }

    public function showCreateForm(): void {
        include __DIR__ . '/../views/create.php';
    }
}
