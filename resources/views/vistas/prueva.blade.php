<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro </title>
    <style>
        body {
            background-color: #f9e79f;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Formulario de Registro </h1>
    <form>
        <label for="nombre_completo">1. Nombre completo</label>
        <input type="text" id="nombre_completo" placeholder="Nombre " required>
        <input type="text" id="apellido" placeholder="Apellido" required>

        <label for="correo">2. Correo electrónico</label>
        <input type="email" id="correo" required>

        <label for="telefono">3. Número de teléfono</label>
        <input type="tel" id="telefono" required>

        <label for="direccion">4. contraseña</label>
        <input type="text" id="direccion" placeholder="contraseña" required>

        

        <label for="pais">6. pais de residencia</label>
        <select id="pais" required>
            <option value="" disabled selected>Por favor seleccione</option>
            <option value="pais1">colombia</option>
            <option value="pais2">brazil </option>
            <option value="pais3">mexico</option>
            <option value="pais4">argentina</option>
            <!-- Agregar más opciones según sea necesario -->
        </select>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>