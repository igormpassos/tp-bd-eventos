<?php
@session_start();
header("Content-Type: text/html; charset=utf8");


/** O nome do banco de dados*/
define('DB_NAME', 'id2582177_bdne');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'id2582177_11500751');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '6277837m@rques');
/** nome do host do MySQL */
define('DB_HOST', 'localhost');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '/');
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');
/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('HEADER_TEMPLATE1', ABSPATH . 'inc/header1.php');
define('FOOTER_TEMPLATE1', ABSPATH . 'inc/footer1.php');
define('AREA_RESTRITA', ABSPATH . '.../login_crud/area_restrita');