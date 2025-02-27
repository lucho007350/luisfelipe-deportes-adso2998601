<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partidos por Jugar</title>
  <link rel="stylesheet" href="styles.css"> <!-- Si tienes un archivo CSS -->
  <style>
    /* Estilos básicos para la tabla */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .table-container {
      width: 100%;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    table th, table td {
      padding: 12px;
      text-align: left;
      border: 1px solid #ddd;
    }

    table th {
      background-color: #4CAF50;
      color: white;
    }

    table td {
      background-color: white;
    }

    .status {
      padding: 5px;
      border-radius: 3px;
      text-align: center;
    }

    .status.pendiente {
      background-color: #f39c12;
      color: white;
    }

    .status.confirmado {
      background-color: #27ae60;
      color: white;
    }

    .status.cancelado {
      background-color: #e74c3c;
      color: white;
    }
  </style>
</head>
<body>

  <h1>Partidos por Jugar</h1>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Deporte</th>
          <th>Equipo Local</th>
          <th>Equipo Visitante</th>
          <th>Fecha y Hora</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Fútbol</td>
          <td>Equipo A</td>
          <td>Equipo B</td>
          <td>2025-02-28 18:00</td>
          <td><span class="status pendiente">Pendiente</span></td>
        </tr>
        <tr>
          <td>Básquetbol</td>
          <td>Equipo X</td>
          <td>Equipo Y</td>
          <td>2025-03-01 20:00</td>
          <td><span class="status confirmado">Confirmado</span></td>
        </tr>
        <tr>
          <td>Tenis</td>
          <td>Equipo Z</td>
          <td>Equipo W</td>
          <td>2025-03-05 14:00</td>
          <td><span class="status cancelado">Cancelado</span></td>
        </tr>
        <tr>
          <td>Voleibol</td>
          <td>Equipo L</td>
          <td>Equipo M</td>
          <td>2025-03-06 10:00</td>
          <td><span class="status pendiente">Pendiente</span></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
