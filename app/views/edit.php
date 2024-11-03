<?php
require_once __DIR__ . '/../../config/config.php';

include __DIR__ . '/partials/header.php';

if (!isset($task)) {
    header("Location: " . BASE_URL . "index.php");
    exit();
}
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Editar Tarea</h2>
    <form action="<?php echo BASE_URL; ?>index.php?action=update&id=<?php echo (int)$task['id']; ?>" method="POST" class="card p-4">
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text"
                   id="title"
                   name="title"
                   value="<?php echo htmlspecialchars($task['title'], ENT_QUOTES, 'UTF-8'); ?>"
                   class="form-control"
                   required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea id="description"
                      name="description"
                      class="form-control"
                      rows="4"><?php echo htmlspecialchars($task['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?php echo BASE_URL; ?>index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
