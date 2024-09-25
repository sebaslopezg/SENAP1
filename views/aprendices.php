<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprenda ome</title>
</head>
<body>
    <h1>aprendices</h1>

    <a href="#">Agregar Aprendiz</a>

    <br><br>

    <!-- Para modal -->
    <div>

        <form action="index.php?call=aprendices" method="post"><br>
            <label>Nombre</label><input type="text"><br>
            <label>Apellido</label><input type="text"><br>
            <label>Documento</label><input type="text"><br>
            <label>Genero</label><input type="text"><br>
            <label>Fecha de nacimiento</label><input type="text"><br>
            <label>Telefono</label><input type="text"><br>
            <label>Correo</label><input type="text"><br><br>
            <input type="submit" value="Guardar">
        </form>

    </div>
    <!-- Para modal FIN -->

    <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
        }

    ?>

    <?php if (!empty($arrAprendices)): ?>

        <table>

            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Genero</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>


            <?php foreach ($arrAprendices as $aprendiz): ?>

                <tr>
                    <td><?= $aprendiz['nombre_Apr']; ?></td>
                    <td><?= $aprendiz['apellido_Apr'] ?></td>
                    <td><?= $aprendiz['num_Doc_Apr'] ?></td>
                    <td><?= $aprendiz['genero_Apr'] ?></td>
                    <td><?= $aprendiz['fecha_Nacimiento_Apr'] ?></td>
                    <td><?= $aprendiz['telefono_Apr'] ?></td>
                    <td><?= $aprendiz['correo_Apr'] ?></td>
                    <td><a href="">Eliminar</a></td>
                    <td><a href="">Editar</a></td>
                </tr>

            <?php endforeach; ?>

        </table>

    <?php endif; ?>


</body>
</html>