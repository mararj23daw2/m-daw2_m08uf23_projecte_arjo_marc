<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
ini_set('display_errors', 0);

function ldapConnection() {
    $ldapconne = [
        'host' => 'zend-maarle',
        'username' => "cn=admin,dc=fjeclot,dc=net",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($ldapconne);
    try {
        $ldap->bind();
        return $ldap;
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        die("Error de conexión con LDAP: " . $e->getMessage());
    }
}
?>