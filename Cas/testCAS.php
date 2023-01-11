<?php
header('Content-Type:text/html;charset=utf-8');

$cas_host='cas.univ-paris13.fr';
$cas_port=443;
$cas_context='/cas/';

require_once('phpCAS-1.3.6/source/CAS.php');

phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);
phpCAS::setNoCasServerValidation();
phpCAS::setLang(PHPCAS_LANG_FRENCH);
phpCAS::forceAuthentication();

header("Location:../creation-admin.php");

if(isset($_REQUEST['logout'])){
    phpCAS::logout();
}

?>