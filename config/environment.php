<?php

// Definição da Conexão com o Banco. development = localDatabase, production = serverDatabase
define('ENVIRONMENT', 'development');

// Caso o projeto esteja dentro de uma pasta e não na raiz do www/htdocs;
define('DIR_ROOT', 'forno_magico');
// Exemplo do projeto na raiz: define('DIR_ROOT', '');

// Dados para a formação dinâmica do caminho absoluto/relativo ->
// localhost
define('DIR_SERVER', $_SERVER['SERVER_NAME']);    

// HTTP
define('DIR_PROTOCOL', ($_SERVER['SERVER_PORT'] != '80') ? 'https' : 'http');

// http://localhost/
define('DIR_PATH', DIR_PROTOCOL . '://' . DIR_SERVER . '/' . DIR_ROOT);

// Caminhos relativos
define('DIR_CSS', DIR_PATH . '/public/assets/css');
define('DIR_IMG', DIR_PATH . '/public/assets/images');
define('DIR_JVS', DIR_PATH . '/public/assets/js');
define('DIR_FNT', DIR_PATH . '/public/assets/fonts');
