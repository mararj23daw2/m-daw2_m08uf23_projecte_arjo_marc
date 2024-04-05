<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

require 'ldapConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ldap = ldapConnection();
    
    $uid = $_POST['uid'];
    $ou = $_POST['unitat_organitzativa'];
    $dn = "ou=$ou,dc=fjeclot,dc=net";

    $filtre = "(uid=$uid)";
    
    try {
        $recerca = $ldap->search($filtre, $dn, Ldap::SEARCH_SCOPE_SUB);
        
        if ($recerca->count() > 0) {
            $entrada = $recerca->current();
            if ($entrada) {
                $dades = $ldap->getEntry($entrada['dn']);
                
                echo "<h3>Dades Usuari: $uid</h3>";
                if (!empty($dades)) {
                    echo "<table border='1'>";
                    echo "<tr><th>Atribut</th><th>Valor</th></tr>";
                    foreach ($dades as $atribut => $valors) {
                        if ($atribut !== 'dn' && is_array($valors)) {
                            foreach ($valors as $valor) {
                                echo "<tr><td>".htmlspecialchars($atribut)."</td><td>".htmlspecialchars($valor)."</td></tr>";
                            }
                        }
                    }
                    echo "</table>";
                    echo "<a href='https://zends-maarle/PM08UF23/principal.php'>ir al menu </a>";
                } else {
                    echo "<p>No s'han trobat les dades del usuari.</p>";
                }
            }            
        } else {
            echo "No s'ha trobat l'usuari.";
        }
    } catch (\Laminas\Ldap\Exception\LdapException $e) {
        echo "Error al buscar l'usuario: " . $e->getMessage();
    }
}
?>
