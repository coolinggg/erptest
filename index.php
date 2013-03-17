<?php
$dir = dirname(str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['SCRIPT_FILENAME']));
$GLOBALS['config']['ROOTURL'] = ($dir == '.' ? '' : $dir . '/');

defined('DS')		|| define('DS', DIRECTORY_SEPARATOR);
defined('ROOT_DIR')	|| define('ROOT_DIR', dirname(__FILE__).DS);
session_start();

require "xerpcfg.php";
require "xerp/base/routing.php";

//var_dump($_REQUEST);;
/*print_r($_SERVER);;
echo "<br/>";
echo "<br/>";
echo $_SERVER["QUERY_STRING"];
echo "<br/>";
echo $_REQUEST["m"];
echo "<br/>";
list($path, $param) = explode("?", $_SERVER["REQUEST_URI"]);
echo $param;
echo "<br/>";
$_params = explode('&',$param);
print_r($_params);;
echo "<br/>";
*/

$aa = new routing();
$aa->go();
?>