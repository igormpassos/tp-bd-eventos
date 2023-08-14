<?php
@session_start();
header("Content-Type: text/html; charset=utf8");


/** O nome do banco de dados*/
define('DB_NAME', 'pers7054_tpbd');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'pers7054_tp');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '@dmin123456');
/** nome do host do MySQL */
define('DB_HOST', '108.167.132.37');
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
define('HEADER_TEMPLATE1', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE1', ABSPATH . 'inc/footer.php');
define('AREA_RESTRITA', ABSPATH . '.../login_crud/area_restrita');