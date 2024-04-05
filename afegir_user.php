<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

require 'ldapConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldap = ldapConnection();
    
    $dn = "uid=" . $_POST['uid'] . ",ou=" . $_POST['unitat_organitzativa'] . ",dc=fjeclot,dc=net";
    $dades = [
        'objectClass' => ["inetOrgPerson", "posixAccount", "top"],
        'uid' => $_POST['uid'],
        'cn' => $_POST['cn'],
        'sn' => $_POST['sn'],
        'givenName' => $_POST['givenName'],
        'uidNumber' => $_POST['uidNumber'],
        'gidNumber' => $_POST['gidNumber'],
        'homeDirectory' => $_POST['Directori_personal'],
        'loginShell' => $_POST['Shell'],
        'postalAddress' => $_POST['PostalAdress'],
        'mobile' => $_POST['mobile'],
        'telephoneNumber' => $_POST['telephoneNumber'],
        'title' => $_POST['title'],
        'description' => $_POST['description'],
    ];
    
    try {
        $ldap->add($dn, $dades);
        echo "<p>Usuari afegit.</p>";
        echo "<a href='https://zends-maarle/PM08UF23/principal.php'>ir al menu</a>";
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "<p>Error al afegir l'usuario: " . $e->getMessage() . "</p>";
    }
}
?>