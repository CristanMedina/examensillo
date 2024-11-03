<?php include __DIR__ . '/partials/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Crear Nueva Tarea</h1>
    <form action="<?php echo BASE_URL; ?>index.php?action=create" method="POST" class="card p-4">
        <div class="mb-3">
            <label for="title" class="form-label">Título de la Tarea</label>
            <input type="text"
                   name="title"
                   id="title"
                   class="form-control"
                   placeholder="Ingresa el título"
                   required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción de la Tarea</label>
            <textarea name="description"
                      id="description"
                      class="form-control"
                      rows="4"
                      placeholder="Descripción de la tarea"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Crear Tarea</button>
            <a href="<?php echo BASE_URL; ?>index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
