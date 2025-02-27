<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Equipo</title>
  <link rel="stylesheet" href="styles.css"> <!-- Si tienes un archivo CSS -->
  <style>
    /* Estilos básicos para el formulario */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .register-container {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    .register-container h2 {
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

    .btn-register {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-register:hover {
      background-color: #45a049;
    }

    .link-login {
      text-align: center;
      margin-top: 10px;
    }

    .link-login a {
      text-decoration: none;
      color: #4CAF50;
    }

    .link-login a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="register-container">
    <h2>Registrar Equipo</h2>
   
      <!-- Nombre del equipo -->
      <label for="team_name">Nombre del equipo</label>
      <input type="text" id="team_name" name="team_name" class="input-field" required>

      <!-- Descripción del equipo -->
      <label for="team_description">Descripción del equipo</label>
      <textarea id="team_description" name="team_description" class="input-field" rows="4" required></textarea>

      <!-- Selección del deporte -->
      <label for="sport">Deporte</label>
      <select id="sport" name="sport" class="input-field" required>
        <option value="" disabled selected>Selecciona un deporte</option>
        <option value="futbol">Fútbol</option>
        <option value="basketball">Básquetbol</option>
        <option value="tenis">Tenis</option>
        <option value="voleibol">Voleibol</option>
        <option value="beisbol">Béisbol</option>
      </select>

      <button type="submit" class="btn-register">Registrar Equipo</button>
    </form>

 
    </div>
  </div>

</body>
</html>
