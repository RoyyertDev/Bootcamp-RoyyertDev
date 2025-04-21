<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
  </head>
  <body>
    <h1>Register</h1>
    <form action="/?action=create" method="post">
      <fieldset>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" />
      </fieldset>
      <fieldset>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" />
      </fieldset>
      <fieldset>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" />
      </fieldset>
      <fieldset>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" />
      </fieldset>
      <fieldset>
        <label for="cedula">Cedula:</label>
        <input type="text" name="cedula" id="cedula" />
      </fieldset>
      <button type="submit">Register</button>
    </form>
  </body>
</html>
