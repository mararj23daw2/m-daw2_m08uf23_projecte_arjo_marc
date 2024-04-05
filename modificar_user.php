<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Attribute;
use Laminas\Ldap\Ldap;

include 'ldapConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldap = ldapConnection();
    
    $dades = "uid=" . $_POST['uid'] . ",ou=" . $_POST['unitat_organitzativa'] . ",dc=fjeclot,dc=net";
    $arraymodicables = [];
    $modicables = $_POST['modicables'];
    $valornou = $_POST['valornou'];
    Attribute::setAttribute($arraymodicables, $modicables, $valornou);    
    
    try {
        $ldap->update($dades, $arraymodicables);
        echo "Atribut modificat.";
        echo "<a href='https://zends-maarle/PM08UF23/principal.php'>ir al menu</a>";
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "Error al modificar: " . $e->getMessage();
    }
}
?>