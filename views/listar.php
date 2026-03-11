<html>

<head>
    <title>Welcome to LAMP Infrastructure</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

    <body>
        <?= "<h1>Hello, Welcome DAW Student!</h1>"; ?>
        <a href="index.php?accion=agregar">Agregar Alumno a la BD</a>
        <div class="container-fluid">
            <?= '<table class="table table-striped">'; ?>
            <?= '<thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Opciones</th>
                    </tr>
                </thead>'; ?>
            <?php foreach ($arrayPersonas as $persona):?>
                    <tr>
                        <td><?=$persona->getId()?></td>
                        <td><?=$persona->getNombre()?></td>
                        <td><a href="index.php?accion=eliminar&id=<?=  $persona->getId()?>">Eliminar </td>
                    <tr>
                <?php endforeach ?>
                </table>
        </div>
    </body>

</html>