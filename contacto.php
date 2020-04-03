<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
  <meta name="encoding" charset="utf-8" />
  <meta name="author" content="EPITCO" />
  <meta name="keywords" content="epit, desarrollo, arquitectura, ingeniería, informática, impresión, formación, servicio, obra" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="theme-color" content="#1f1f1f" />

    <title>Contacto | EPITCO</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/78a03bac99.js"></script>
    <!-- Tipografia -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans&display=swap" rel="stylesheet">
    <!-- Nuestros estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/contacto.css">
    <!--Firebase Hosting-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
    <header>
        <?php include_once 'templates/header.php'; ?>
        <div class="contenido-header contacto"></div>
    </header>
    <main>
        <h1 class="encabezado-seccion">Contacto</h1>
        <div class="contenedor seccion contenido-centrado">
            <?php
                  if(@$_GET['i']=='ok') {  ?>

                <h3 class="centro">La consulta se envió correctamente.</h3>
                <br>
                <div class="submit">
                    <a href="contacto.php" class="btn btn-info btn-lg">Volver a contactar</a>
                </div>
                <br>
                <?php
                  } else{
                ?>
            <form class="contacto" action="envio-formulario.php" method="post" enctype="multipart/form-data">

                <fieldset>
                    <legend>Informacion personal</legend>

                    <label for="nombre">* Nombre y apellidos</label>
                    <input type="text" name="nombre" id="nombre" required>

                    <label for="email">* Email</label>
                    <input type="email" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$">

                    <label for="telefono">* Teléfono</label>
                    <input type="tel" name="telefono" id="telefono" required pattern="[0-9]{9}">

                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje"></textarea>

                </fieldset>

                <div class="submit">
                    <input type="submit" value="Enviar" class="btn btn-info btn-lg">
                </div>

                <p>Los campos marcados con * son de cumplimentación obligatoria.</p>
            </form>
            <?php } ?>
        </div>

    </main>
<?php include_once 'templates/footer.php'; ?>
