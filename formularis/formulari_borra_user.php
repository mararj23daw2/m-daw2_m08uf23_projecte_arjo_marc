<?php
if (!isset($_COOKIE['logok']) || $_COOKIE['logok'] !== 'true') {
    echo "No pots accedir aquí sense fer login. Ho pots fer aquí: ";
    echo "<a href='https://zends-maarle/PM08UF23/'>login</a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esborrar</title>
</head>
<body>
    <h1>Esborrament dels usuaris</h1>
    <form action="../borrar_user.php" method="post">
    <ul>
        <li>
            <label for="uid">uid:</label>
            <input type="text" name="uid" required><br>
        </li>
        <li>
            <select name="unitat_organitzativa" required>
            <option value="---">seleciona la unidad organitzativa que desea</option>
            <option value="administradors">administradors</option>
            <option value="desenvolupadors">desenvolupadors</option>
            <option value="usuaris">usuaris</option>
            </select>
        </li>
    </ul>
    <button type="submit" value="Borrar Usuari">Borrar Usuari</button>
    </form>
</body>
</html>