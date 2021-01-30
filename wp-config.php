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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpresslino_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'I*agXD>h[4e5jjX9,ag;|_R3|^uFnc_0O_5WN%#1X7)~u@;g|2D@o0m/_L:h<Q[3' );
define( 'SECURE_AUTH_KEY',  'Cf5~I=%I/CC#o$E|Q1Km<pP6hMP&(V.5vp#4Z_P=<U?.vzCH?0ezshBL<b?+bLxK' );
define( 'LOGGED_IN_KEY',    '8fh:.QW.*IXXP~0~+N/(P]kgXI$D(eP%kU}DI);Z $6 IR|_!qJLuLmW:x_~,E:y' );
define( 'NONCE_KEY',        '. ~k.Z!r@UV}vme _UAm hM!r$tK-}S7SV%Cn,0SQ@6M|@UaO9C`O,5%[m@lJIGT' );
define( 'AUTH_SALT',        '89b]c@.0 ]GCp&/V01Dq|&6SKmx!cE_CxTLK7{uG>Z4}0!]g4}S<IU2rFi*2>>FB' );
define( 'SECURE_AUTH_SALT', 't{YOE5 Fp;qC[ROg*i^&tzMj6(E.B)Png#v+Q6.!hOmy/1?7IEkOB8&#;<#.$|Jx' );
define( 'LOGGED_IN_SALT',   'kc-Gp$T,:Nb&HSYk)=@:XSx-U>j)E`}-Y3`*:azl319C@bRl&w~KDG;CV~tH K+4' );
define( 'NONCE_SALT',       '<6uC:yq{3(m^eS=Vc[X|zHZ*|{-kX(%C3H{.z td#I:|l}Cgy2x0R_f<HcOvF_02' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
