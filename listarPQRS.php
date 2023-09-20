<!DOCTYPE html>
<html>
<head>
    <title>Listado de PQRS</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2; /* Color de fondo general */
        }

        h1 {
            width: 100%;
            text-align: center;
            padding: 20px 0;
            background-color: #3498DB; /* Color de fondo del encabezado */
            color: white; /* Color del texto del encabezado */
        }

        /* Tabla de pacientes */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #ccc; /* Borde de la tabla */
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ccc; /* Borde de las celdas */
        }

        table th {
            background-color: #3498DB; /* Color de fondo de las cabeceras */
            color: white; /* Color del texto de las cabeceras */
        }

        table a {
            text-decoration: none;
            color: #3498DB; /* Color de los enlaces */
        }

        table a:hover {
            text-decoration: underline;
        }

        /* Botón para agregar paciente */
        .add-button {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            background-color: #9B59B6; /* Color de fondo del botón */
            color: white; /* Color del texto del botón */
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
        }

        .add-button:hover {
            background-color: #8E44AD; /* Cambio de color al pasar el cursor por encima del botón */
        }
    </style>
</head>
<body>
<header class="sticky-header">
        <div class="header-area ">
            <div  class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="logo1" src="img/logo.png" alt="">
                                    <h4></h4>
                                </a>
                            </div>
                        </div>
                        <div class="Margen">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">Inicio</a></li>
                                        <li><a href="servicios.html">Servicios</a></li>
                                        <li><a href="about.html">Acerca De</a></li>
                                        <li><a href="especialidades.html">Especialidades</a></li>
                                        <li><a href="PQRS.html">PQRS</a></li>
                                        <li><a href="#"><img class="img-user" src="../Healine/img/sesion-removebg-preview.png" alt=""><i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="../Healine/Login-individual.html">Iniciar Sesion</a></li>
                                                <li><a href="../Healine/registro.html">Registrarse</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="../Healine/registro.html">Aparte Una Cita</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a target="_blank" href="https://es-la.facebook.com">
                                    <i class="fa fa-linkedin"><img class="icon-1" src="../Healine/img/face-white.png" alt=""></i>
                                </a>
                                <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=healineoficial@gmail.com&su=Ingresa%20El%20Asunto">
                                    <i class="fa fa-facebook"><img class="icon-2" src="../Healine/img/gmail-white.png" alt=""></i>
                                </a>
                                <a target="_blank" href="https://twitter.com/?lang=es">
                                    <i class="fa fa-google-plus"><img class="icon-1" src="../Healine/img/twiter-white.png" alt=""></i>
                                </a>
                                <a target="_blank" href="https://www.youtube.com">
                                    <i class="fa fa-google-plus"><img class="icon-2" src="../Healine/img/youtube-white.png" alt=""></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="tel:123456789"> <img class="icon-3" src="../Healine/img/tele.png" alt=""> 123456789</a></li>
                                    <li><a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=healineoficial@gmail.com&su=Ingresa%20El%20Asunto"> <img class="icon-4" src="../Healine/img/mail.png" alt=""> healineoficial@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br><br>
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Listado de PQRS</h3>
                            <?php
                            // Conectar a la base de datos y obtener la lista de consultorios
                            require "conexionBaseDatos.php";
                            $conexion = Conectarse();
                            $query = "SELECT * FROM pqrs";
                            $resultado = $conexion->query($query);
                            
                            if ($resultado->num_rows > 0) {
                                ?>
                                <table border=1>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tipo</th>
                                        <th>Mensaje</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Editar</th>
                                    </tr>
                                    <?php
                                    while ($fila = $resultado->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?= $fila['id'] ?></td>
                                            <td><?= $fila['tipo'] ?></td>
                                            <td><?= $fila['mensaje'] ?></td>
                                            <td><?= $fila['nombre'] ?></td>
                                            <td><?= $fila['correo_electronico'] ?></td>
                                            <td>
                                              
                                                <a href="editarPQRS.php?id=<?= $fila['id'] ?>">Editar</a>

                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                                <br>
                                <a href="PQRS.html" class="button button-contactForm boxed-btn">Agregar PQRS</a>
                                <?php
                            } else {
                                echo "No se encontraron consultorios.";
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
