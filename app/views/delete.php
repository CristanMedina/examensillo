<?php
require_once __DIR__ . '/../../config/config.php';

if (!isset($task)) {
    $id = $_GET['id'] ?? null;

    if (!$id) {
        die('ID no proporcionado');
    }

    header("Location: " . BASE_URL . "index.php");
    exit();
}

?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Eliminar Tarea</h1>

    <div class="alert alert-warning text-center">
        <p>¿Estás seguro de que deseas eliminar la tarea <strong><?php echo htmlspecialchars($task['title'], ENT_QUOTES, 'UTF-8'); ?></strong>?</p>
        <p>Esta acción no se puede deshacer.</p>
    </div>

    <form action="<?php echo BASE_URL; ?>index.php?action=delete&id=<?php echo (int)$task['id']; ?>" method="POST" class="text-center">
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="<?php echo BASE_URL; ?>index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
