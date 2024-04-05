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
    <title>Modificar</title>
</head>
<body>
    <h1>Afegiment dels usuaris</h1>
    <form action="../modificar_user.php" method="post">
  <ul>
    <li>
    <label for="uid">uid:</label>
    <input type="text" name="uid" required><br>
    </li>
    <li>
    <label for="unitat_organitzativa">unitat organitzativa</label>
    <select name="unitat_organitzativa" required>
    <option value="---">seleciona la unidad organitzativa que desea</option>
    <option value="administradors">admin</option>
    <option value="desenvolupadors">desen</option>
    <option value="usuaris">usuari</option>
    </select>
    </li>
    <li>
      <label for="uidNumber">uid number:</label>
      <input type="radio" id="uidNumber" name="modicables" value="uidNumber" required />
    </li>
    <li>
      <label for="gidNumber">gid Number</label>
      <input type="radio" id="gidNumber" name="modicables" value="gidNumber"/>
    </li>
    <li>
      <label for="Directori_personal">Directori personal</label>
      <input type="radio" id="msg" name="modicables" value="homeDirectory"></input>
    </li>
    <li>
    <label for="Shell">Shell</label>
      <input type="radio" id="msg" name="modicables" value="loginShell"></input>
    </li>
    <li>
    <label for="cn">cn</label>
      <input type="radio" id="msg" name="modicables" value="cn"></input>
    </li>
    <li>
    <label for="sn">sn</label>
      <input type="radio" id="msg" name="modicables" value="sn"></input>
    </li>
    <li>
    <label for="givenName">given Name</label>
      <input type="radio" id="msg" name="modicables" value="givenName"></input>
    </li>
    <li>
    <label for="PostalAdress">Postal Adress</label>
      <input type="radio" id="msg" name="modicables" value="postalAddress"></input>
    </li>
    <li>
      <label for="mobile">mobile:</label>
      <input type="radio" id="msg" name="modicables" value="mobile"></input>
    </li>
    <li>
      <label for="telephoneNumber">telephoneNumber</label>
      <input type="radio" id="msg" name="modicables" value="telephoneNumber"></input>
    </li>
    <li>
      <label for="title">title:</label>
      <input type="radio" id="msg" name="modicables" value="title"></input>
    </li>
    <li>
      <label for="description">description:</label>
      <input type="radio" id="msg" name="modicables" value="description"></input>
    </li>
    <li>
        <label for="Valor nou">Valor nou:</label>
        <input type="text" name="valornou" required><br>
    </li>
  </ul>
  <button type="submit" value="Modificar Usuari">Modificar Usuari</button>
</form>
</body>
</html>