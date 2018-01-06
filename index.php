<?php
define('GR_BOARD_2', true);
define('GR2_VERSION_NUM', 2018);
define('GR2_VERSION_STATE', 'beta');
define('GR2_VERSION_STR', 'v2.0.1');

$docRootArr = explode('/', $_SERVER['DOCUMENT_ROOT']);
$root = $docRootArr[count($docRootArr) - 2];
$grboardArr = explode(DIRECTORY_SEPARATOR, dirname(__FILE__));
$grboard = end($grboardArr);
if($root == $grboard) $grboard = '.';
if(!file_exists('dbinfo.php')) { include 'install/index.php'; die(); }
	
@session_save_path('session');
@session_start();

include 'util/common/common.php';
include 'dbinfo.php';
include 'util/db/mysql.php';
include 'common.config.php';
$Common = new Common($grboard);
$DB = new MySQL($db_hostname, $db_username, $db_password, $db_dbname, $db_is_utf8);

if(!isset($_GET['module']) || !isset($_GET['action'])) $Common->error('@page/error/index_access_without_param');
$ext_module = $Common->getPlaneText($_GET['module']);
$ext_action = $Common->getPlaneText($_GET['action']);

include 'module/' . $ext_module . '/index.php';

unset($grboardArr, $grboard, $Common, $DB, $ext_module, $ext_action, $ext_page, $ext_articleNo, $gr2cfg);
?>