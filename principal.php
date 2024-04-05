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
    <title>Principal</title>
    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 20px;
          background-color: #f4f4f4;
          text-align: center;
          align-items: center;
      }

      ul {
          display: block;
          list-style: none;
          background-color: darkgrey;
          padding: 5px;
          margin: 0;
      }

      ul li {
          display: block;
          margin: 0 15px;
      }

      ul li a {
          text-decoration: none;
          color: white;
          padding: 5px 20px;
          border-radius: 5px;
          transition: background-color 0.3s, color 0.3s;
      }

      ul li a:hover, ul li a:focus {
          background-color: #555;
          color: #ddd;
      }
  </style>
</head>
<body>
  <h1>Menú Prinicipal</h1>
  <ul>
      <li><a href="formularis/formulari_afegir_user.php">Afegir usuari</a></li>
      <li><a href="formularis/formulari_borra_user.php">Esborrar usuari</a></li>
      <li><a href="formularis/formulari_modificar_user.php">Modificar usuari</a></li>
      <li><a href="formularis/formulari_veure_user.php">Veure usuari</a></li>
  </ul>
</body>
</html>