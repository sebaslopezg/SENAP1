<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Comentarios</title>
</head>

<body>
    <h1>Comentarios</h1>
    <?php if (!empty($comentarios)): ?>
        <!-- Mostrar lista de comentarios -->
        <ul>
            <?php foreach ($comentarios as $comentario): ?>
                <li>
                    <strong><?php echo htmlspecialchars($comentario['autor']); ?>:</strong>
                    <?php echo htmlspecialchars($comentario['contenido']); ?>
                    <a href="index.php?action=editar&id=<?php echo $comentario['id'];
                                                        ?>">Editar</a>
                    <a href="index.php?action=eliminar&id=<?php echo $comentario['id']; ?>"
                        onclick="return confirm('¿Estás seguro de que quieres eliminar este comentario?');">Eliminar</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <!-- Mostrar mensaje cuando no hay comentarios -->
        <p>No hay comentarios disponibles.</p>
    <?php endif; ?>
    <!-- Botón para ir al formulario de nuevo comentario -->
    <a href="../views/CrearComentario.php">
        <button>Agregar Nuevo Comentario</button>
    </a>
</body>

</html>