<?php include __DIR__ . '/partials/header.php'; ?>

<h1 class="text-center mb-4">Lista de Tareas</h1>

<div class="text-center mb-3">
    <a href="<?php echo BASE_URL; ?>index.php?action=create" class="btn btn-primary">Crear Nueva Tarea</a>
</div>

<?php if (isset($tasks) && is_array($tasks) && count($tasks) > 0): ?>
    <ul class="list-group">
        <?php foreach ($tasks as $task): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo htmlspecialchars($task['title'], ENT_QUOTES, 'UTF-8'); ?>
                <span>
                    <a href="<?php echo BASE_URL; ?>index.php?action=edit&id=<?php echo (int)$task['id']; ?>"
                       class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?php echo BASE_URL; ?>index.php?action=delete&id=<?php echo (int)$task['id']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('¿Estás seguro de eliminar esta tarea?');">Eliminar</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="alert alert-info text-center">
        No hay tareas disponibles. Puedes crear una nueva tarea.
    </div>
<?php endif; ?>

<?php include __DIR__ . '/partials/footer.php'; ?>
