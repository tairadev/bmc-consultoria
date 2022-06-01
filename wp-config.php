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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bmc_consultoria' );

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
define( 'AUTH_KEY',         '0;|yS|}b><<=61/~PyiAo%)pLF>uF*#M-7~>-<#8kh]Ie:E2r?DdNh+*=r W#.xr' );
define( 'SECURE_AUTH_KEY',  '{x3*4R(uBoH.fCh^Y@.ym[ -I`1HtB-uiP$f)55_:QjTsuN<V%(W(UGLg,P,udE2' );
define( 'LOGGED_IN_KEY',    'A5F#EN q|O2NYbT?O}Ig+mM^z_]sk|OOV(UmKib4,Q+*EZwEe+Gb-h7dO#UTwcIR' );
define( 'NONCE_KEY',        'CA3`Vb+WMzgq(uK5O5}0=z(X*$i_y4ToTR1X$ERzD~e1,)h9(R2Ys >];LysfRLU' );
define( 'AUTH_SALT',        'RIfo.8~nowUb%r7${ vAQ_UNzvFVHt5_Yz5NX*I) #~cH;$7*EmShw!|kPjje:rq' );
define( 'SECURE_AUTH_SALT', 'q8fcks#)>p0]AL?:Ym.+lF3KpAvk4!f&oiA(jOrg9n:z/gC*;9O=J]t0L;>q0zq[' );
define( 'LOGGED_IN_SALT',   'zW92L})dVKQ$-@?8E3X D$tO|bd+S-St]YJ/D,^>?ms20*Y87`M36W0vXP7%u{aB' );
define( 'NONCE_SALT',       'z=z>+?;Uy;CZuQ@2P,kERu2x!FP]<y$WIbBPyWW3aPP9AJwoa]7SpBe+YYbA&I9_' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bmcc_';

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
