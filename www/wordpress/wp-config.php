<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.t;F8J)+E<y>QRi6GfEvJ[P*LEhR7q,,(8e3No+BEDO6P1uMuW@cX6wFQS 8n0iV');
define('SECURE_AUTH_KEY',  '$r+Cw|6ki%Sg>GuZfh5fwz.I]f#$^a 6?F0jo{kv:a>)1LViGxo>0Hp|oru1<@&-');
define('LOGGED_IN_KEY',    'B7?FI[6yNH7q4F?G5uHgT4@{,Z%jwRabEjHXGG;4mhBMInZOjYaC06`_ {e[,>3C');
define('NONCE_KEY',        '(i;O/i1wE&Mw~+x8Bv 0vBh QKy.>j^kzVCg`z+iG2mUTf&llB>J43r.dg;<6*N9');
define('AUTH_SALT',        '1{[tHD7Bc_.T6Tv8X*xP*Det5o~Oja-XLhH6r<rw=t}4RlEu4v,PpLmNi;J8y*]#');
define('SECURE_AUTH_SALT', 'M_/`|aw1`P%/),O! #O&0^r;i-K=7Fb,NO,|cQVE)z(#My:!43GlC~0O094&@x)}');
define('LOGGED_IN_SALT',   'dq:1eE~<:M@Y}R6k9;b_o?.KM%?KyT*W^4gK<tM%bOfv+Blak]~-x4&@-jzen2*]');
define('NONCE_SALT',       ' 2_0zwS=V}ZsmkC7PZZa542sn@:^hW8T>>;d}.)k?7qNi&M2`.fScOEc35cYE|YN');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');