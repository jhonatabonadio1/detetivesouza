<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/** The name of the database for WordPress */
define('DB_NAME', 'd532qoaiaupemp');
/** MySQL database username */
define('DB_USER', 'tmdgzftxcpicit');
/** MySQL database password */
define('DB_PASSWORD', '0427672e41c1eff109230a325f070d9fb6c5a5c97adf781df72da534da3d8993');
/** MySQL hostname */
define('DB_HOST', 'ec2-54-157-160-218.compute-1.amazonaws.com');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'coloque a sua frase única aqui' );
define( 'SECURE_AUTH_KEY',  'coloque a sua frase única aqui' );
define( 'LOGGED_IN_KEY',    'coloque a sua frase única aqui' );
define( 'NONCE_KEY',        'coloque a sua frase única aqui' );
define( 'AUTH_SALT',        'coloque a sua frase única aqui' );
define( 'SECURE_AUTH_SALT', 'coloque a sua frase única aqui' );
define( 'LOGGED_IN_SALT',   'coloque a sua frase única aqui' );
define( 'NONCE_SALT',       'coloque a sua frase única aqui' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
