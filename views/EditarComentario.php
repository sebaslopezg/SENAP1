<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Comentario</title>
</head>

<body>
    <h1>Editar Comentario</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo $comentario['id']; ?>">
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?php echo
                                                            htmlspecialchars($comentario['autor']); ?>" required>
        <br>
        <label for="contenido">Contenido:</label>
        <textarea name="contenido" id="contenido" required><?php echo
                                                            htmlspecialchars($comentario['contenido']); ?></textarea>
        <br>
        <button type="submit" name="action" value="actualizar">Actualizar</button>
    </form>
</body>

</html>