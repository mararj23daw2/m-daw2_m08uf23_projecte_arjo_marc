<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

include 'ldapConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldap = ldapConnection();
    
    $dn = "uid=" . $_POST['uid'] . ",ou=" . $_POST['unitat_organitzativa'] . ",dc=fjeclot,dc=net";
    
    try {
        $ldap->delete($dn);
        echo "Usuari borrat.";
        echo "<a href='https://zends-maarle/PM08UF23/principal.php'>ir al menu</a>";
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "Error al eliminar: " . $e->getMessage();
    }
}
?>
