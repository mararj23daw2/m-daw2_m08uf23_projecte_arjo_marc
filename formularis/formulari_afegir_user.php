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
    <title>Afegir</title>
</head>
<body>
    <h1>Afegiment dels usuaris</h1>
    <form action="../afegir_user.php" method="post">
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
      <input type="text" id="uidNumber" name="uidNumber" />
    </li>
    <li>
      <label for="gidNumber">gid Number</label>
      <input type="text" id="gidNumber" name="gidNumber" />
    </li>
    <li>
      <label for="Directori_personal">Directori personal</label>
      <input id="msg" name="Directori_personal"></input>
    </li>
    <li>
    <label for="Shell">Shell</label>
      <input id="msg" name="Shell"></input>
    </li>
    <li>
    <label for="cn">cn</label>
      <input id="msg" name="cn"></input>
    </li>
    <li>
    <label for="sn">sn</label>
      <input id="msg" name="sn"></input>
    </li>
    <li>
    <label for="givenName">given Name</label>
      <input id="msg" name="givenName"></input>
    </li>
    <li>
    <label for="PostalAdress">Postal Adress</label>
      <input id="msg" name="PostalAdress"></input>
    </li>
    <li>
      <label for="mobile">mobile:</label>
      <input id="msg" name="mobile"></input>
    </li>
    <li>
      <label for="telephoneNumber">telephoneNumber</label>
      <input id="msg" name="telephoneNumber"></input>
    </li>
    <li>
      <label for="title">title:</label>
      <input id="msg" name="title"></input>
    </li>
    <li>
      <label for="description">description:</label>
      <input id="msg" name="description"></input>
    </li>
  </ul>
  <button type="submit" value="Afegir Usuari">Afegir Usuari</button>
</form>
</body>
</html>