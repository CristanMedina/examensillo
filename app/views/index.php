<?php
include __DIR__ . '/partials/header.php';
?>

<h1 class="text-center mb-4">Lista de Tareas</h1>

<div class="text-center mb-3">
    <a href="<?php echo $base_url; ?>create.php" class="btn btn-primary">Crear Nueva Tarea</a> <!-- #El baseURL de esta funcion solo es "create.php" -->
</div>

<?php if (isset($tasks) && is_array($tasks) && count($tasks) > 0): ?>
    <ul class="list-group">
        <!-- Iterar sobre todas las tareas -->
        <?php  foreach ($tasks as $task): ?> <!-- #Falto comenzar el foreach loop -->
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <!-- Título de la tarea -->
                <?php echo htmlspecialchars($task['task_name'], ENT_QUOTES, 'UTF-8'); ?>
                <!-- Botones de acción: Editar y Eliminar -->
                <span>
                <a href="app/views/edit.php?id=<?php echo isset($task['id']) ? intval($task['id']) : ''; ?>" class="btn btn-warning btn-sm">Editar</a>
                <!-- #No es necesario el $base = 10, pues este solo es usado para convertir cadenas a "non-decimal bases" -->
                    <a href="app/views/delete.php?id=<?php echo $task['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>

    <div class="alert alert-info text-center">
        No hay tareas disponibles. Puedes crear una nueva tarea.
    </div>
<?php endif; ?>

<?php include __DIR__ . '/partials/footer.php'; ?> <!-- #La importacion del archivo estaba mal escrito -->
