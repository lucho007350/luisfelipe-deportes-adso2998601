<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link rel="stylesheet" href="styles.css"> <!-- Si tienes un archivo CSS -->
  <style>
    /* Estilos básicos para el formulario */
    body {
      font-family: Arial, sans-serif;
      background-color: #0f0f9e;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: rgb(79, 235, 79);
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ddd;
      box-sizing: border-box;
    }

    .btn-login {
      width: 100%;
      padding: 10px;
      background-color: #a6a810;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

  </style>
</head>
<body>

  <div class="login-container">
    <h2>Iniciar sesión</h2>
    
      
      <label for="email">Correo Electrónico</label>
      <input type="email" id="email" name="email" class="input-field" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" class="input-field" required>

      <button type="submit" class="btn-login">Iniciar sesión</button>
    </form>

   
    </div>
  </div>

</body>
</html>
