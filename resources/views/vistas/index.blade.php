<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Eventos Deportivos Universitarios</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1f94e2;
        }
        header {
            background-color: #1a2699;
            color: rgb(255, 255, 255);
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            margin: 10px 0;
        }
        nav a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            margin: 0 15px;
        }
        main {
            text-align: center;
            padding: 50px 20px;
        }
        h1 {
            font-size: 24px;
            margin: 0;
        }
        p {
            color: #333;
        }
        .button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #fffefe;
            color: rgb(255, 245, 245);
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
        
    

<header>
    <h1>Gestión de Eventos Deportivos </h1>
    <nav>
        <a href="{{ route('primer.show',0) }}">Equipos</a>
        <a href="{{ route('primer.edit',0) }}">Partidos</a>
        <a href="{{ route('segundo.index',0) }}">Resultados</a>
        <a href="{{ route('segundo.create',0) }}">Notificaciones</a>
        
        
        
    </nav>
</header>

<main>
    <h1>bienvenidos a la gestion de eventos deportivos</h1>
    <p>Automatiza el registro de equipos, la programación de partidos y el seguimiento de resultados.</p>
    
        <button style="background-color: #180377; color: rgb(255, 254, 254); padding: 10px 20px; border: none; border-radius: 5px;">
            <a href="{{ route('primer.index') }}" style="text-decoration: none; color: rgb(255, 255, 255);">Registrar</a>
          </button>
          <button style="background-color: #180377; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
            <a href="{{ route('primer.create') }}" style="text-decoration: none; color: rgb(255, 255, 255);">iniciar sesion</a>
          </button>
          
</main>

</body>
</html>