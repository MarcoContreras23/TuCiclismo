<html>
  <head>
    <link rel="stylesheet" href="form.css"
  </head>
  <body>
    <section>
      <h1>FORMULARIO</h1>
    <form method="post">
      <input type="text" placeholder = "Nombre" name = "nombre">
      <input type="text" placeholder = "Correo" name = "correo">
      <input type="text" placeholder = "Asunto" name ="asunto">
      <textarea placeholder = "Mensaje" name = "mensaje"></textarea>
      <input type="submit" name ="enviar">
    </form>
     <? php
      include ("correo.php");
      ?>
    </section>
  </body>
</html>