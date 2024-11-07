<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/users" method="POST">
        @csrf <!-- Token de seguridad para formularios POST en Laravel -->
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
    
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    
        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    
        <button type="submit">Crear Usuario</button>
    </form>
    
</body>
</html>
