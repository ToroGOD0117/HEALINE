<!DOCTYPE html>
<html>
<head>
    <title>Editar PQRS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .our_department_area {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #3498DB;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        a.button-contactForm {
            display: inline-block;
            background-color: #3498DB;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
            text-align: center;
        }

        a.button-contactForm:hover {
            background-color: #258cd1;
        }
    </style>
</head>
<body>

    <br><br>
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Editar PQRS</h3>
                            <?php
                            // Conectar a la base de datos y obtener los detalles del PQRS seleccionado
                            require "conexionBaseDatos.php";
                            $conexion = Conectarse();
                            
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $query = "SELECT * FROM pqrs WHERE id = '$id'";
                                $resultado = $conexion->query($query);
                                if ($resultado->num_rows > 0) {
                                    $pqrs = $resultado->fetch_assoc();
                                    $tipo = $pqrs['tipo'];
                                    $mensaje = $pqrs['mensaje'];
                                    $nombre = $pqrs['nombre'];
                                    $correo_electronico = $pqrs['correo_electronico'];

                                    // Obtener los tipos de la base de datos
                                    $queryTipos = "SELECT DISTINCT tipo FROM pqrs";
                                    $resultadoTipos = $conexion->query($queryTipos);
                                    $tipos = [];
                                    if ($resultadoTipos->num_rows > 0) {
                                        while ($filaTipo = $resultadoTipos->fetch_assoc()) {
                                            $tipos[] = $filaTipo['tipo'];
                                        }
                                    }
                                    ?>
                                    <form action="procesarEditarPQRS.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <label for="tipo">Tipo:</label>
                                        <select name="tipo">
                                            <?php
                                            foreach ($tipos as $tipoOpcion) {
                                                $selected = ($tipo == $tipoOpcion) ? 'selected' : '';
                                                echo "<option value='$tipoOpcion' $selected>$tipoOpcion</option>";
                                            }
                                            ?>
                                        </select>
                                        <label for="mensaje">Mensaje:</label>
                                        <textarea name="mensaje"><?= $mensaje ?></textarea>
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" name="nombre" value="<?= $nombre ?>">
                                        <label for="correo_electronico">Correo Electrónico:</label>
                                        <input type="email" name="correo_electronico" value="<?= $correo_electronico ?>">
                                        <!-- Otros campos del formulario -->
                                        <br>
                                        <br>
                                        <input type="submit" value="Guardar Cambios">
                                    </form>
                                    <?php
                                } else {
                                    echo "PQRS no encontrado.";
                                }
                            } else {
                                echo "ID de PQRS no especificado.";
                            }
                            ?>
                            <br>
   
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>
