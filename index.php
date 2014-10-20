<?php
/* Modify the constants bellow to match your project.
 * TODO: Move this to a settings.ini file
 */
define('LIBRARY_PATH','library/RestWiz');
define('APPLICATION_PATH','demo_api');
define('DEFAULT_CONTROLLER', 'cars');
/* Do not modify bellow this line*/

require_once LIBRARY_PATH . '/Bootstrap/Bootstrap.php';

$bootstrap = new RestWiz_Bootstrap_Bootstrap();


if (!empty($_GET['controller'])) {
    $controllerName = $_GET['controller'] ;
} else {
    $controllerName = DEFAULT_CONTROLLER;
}
$bootstrap->setController(strtolower($controllerName));