<?php
# --------------------------------------------------------------------------------------
# Define BASE_PATH
#
$tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($tmp[count($tmp) - 1]);
#
# Set common constants
define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
define('PRIVATE_PATH', BASE_PATH . 'private_html/');
define('PUBLIC_PATH', BASE_PATH . 'public_html/');
/* Change the string to your localhost path, which would depend on where you put the
   contents of the zip file. */
define('WEB_URL', "http://localhost/PhpStormProjects/tests/public_html/");
#
# Set PHP configuration options
/* This will be used for objects later... */
define('CLASS_ROOT', PUBLIC_PATH . 'class/');
#
# Set Smarty constants
define('SMARTY_ROOT', PUBLIC_PATH . 'libs/smarty-4.2.1/');
define('SMARTY_TEMPLATES', PUBLIC_PATH . 'templates/');
define('SMARTY', SMARTY_ROOT . 'libs/Smarty.class.php');

/*
 * The following has been added to resolve the problem of relying on the system's timezone settings.
 */
date_default_timezone_set('America/New_York');

# Define the Smarty template/presentation framework.
/* ------------------------------------------------------------------------------------
 * This application uses Smarty, a template/presentation framework which can be
 * downloaded from www.Smarty.net
 */
require_once SMARTY;
$smarty = new Smarty;
$smarty->setTemplateDir(SMARTY_TEMPLATES);
/* Make sure you create the folders templates_c, cache, and configs in the
   smarty-4.2.1 folder */
$smarty->setCompileDir(SMARTY_ROOT . 'templates_c');
$smarty->setCacheDir(SMARTY_ROOT . 'cache');
$smarty->setConfigDir(SMARTY_ROOT . 'configs');
$smarty->assign('WEB_URL', WEB_URL);

/* DEBUG *
echo "Base Path: " . BASE_PATH . "<br><br>";
echo "Smarty: " . SMARTY . "<br><br>";
exit();
// */
session_start();