
<html>
<?php

    $adServer = "ldap://10.2.72.195";	
	
    $ldap = ldap_connect($adServer) or die ("ERROR: No se pudo conectar con el Servidor LDAP.");
    $username = 'Administrador';    
    $password = 'asdf1234.';
  
    $ldaprdn = 'sistemaswin2012' . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);

   

    if ($bind) {		
    	$msg = "Estás logueado como correctamente como $username";    	
    } else {
        $msg = "Usuario o contraseña incorrectos";        
    }
    echo $msg;

 ?>
</html>