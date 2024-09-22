<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Comentario</title>
</head>

<body>
    <h1><?php echo isset($comentario) ? 'Editar Comentario' : 'Agregar Comentario';
        ?></h1>
    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo isset($comentario) ?
                                                    $comentario['id'] : ''; ?>">
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?php echo isset($comentario) ?
                                                                htmlspecialchars($comentario['autor']) : ''; ?>" required>
        <br>
        <label for="contenido">Contenido:</label>
        <textarea name="contenido" id="contenido" required><?php echo isset($comentario) ?
                                                                htmlspecialchars($comentario['contenido']) : ''; ?></textarea>
        <br>
        <button type="submit" name="<?php echo isset($comentario) ? 'action' : 'action'; ?>"
            value="<?php echo isset($comentario) ? 'actualizar' : 'agregar'; ?>">
            <?php echo isset($comentario) ? 'Actualizar' : 'Agregar'; ?>
        </button>
    </form>
</body>

</html>