<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejerci9.php" method = "POST">
        <label for="">nombre</label><input type="text" name = "nom">
        <label for="">asignatura</label><input type="text" name = "asig">
        <label for="">nota uno</label><input type="number" name = "uno" min="0"
        max="5">
        <label for="">nota dos</label><input type="number" name = "dos" min="0"
        max="5">
        <label for="">nota tres</label><input type="number" name = "tres" min="0"
        max="5">
        <input type="submit" value = "calificacion">
    </form>
</body>
</html>