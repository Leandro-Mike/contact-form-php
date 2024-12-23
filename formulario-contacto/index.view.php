<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./rsc/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
    <title>Formulario de contacto</title>
</head>
<body>
   <div class="wrap animate__animated animate__backInDown">

   <h3 class="titulo">Formulario de contacto</h3>

   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Escriba su mensaje"  ><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

<?php if(!empty($errores)) : ?>
<div class="alert error ">

<p><?php echo $errores; ?></p>

</div>

<?php elseif($enviado) : ?>

    <div class="alert succes">

<p>Mensaje enviado</p>

</div>
<?php endif ?>




<input type="submit" value="Enviar Correo" name="submit"  class="btn-submit">

   </form>
   </div>
</html>