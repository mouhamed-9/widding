<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bdwidding' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r8Xcf, op3@E}a^/qAUJfU [*Tj(n!04Y&o:O:ag8n@I8Af~)VWh0e/gCHU`k|af' );
define( 'SECURE_AUTH_KEY',  '$pG_Le2fPZq! {,UrsYM+[Frw#QG$x7-bOuwScj!dgqJo/gAcW`vUt*PpJ=j=C0g' );
define( 'LOGGED_IN_KEY',    ';`a*Cg67|Xjnc_F@,)k>p>%`dX4g94Cr^>KDQSO.rJ$WBO3G%ehuCBbkBF){6a!>' );
define( 'NONCE_KEY',        '*N@2mJ69z b<8>oWW189%#EC9RCrC$c:PzL.Z1$Qe47-o])jX;2t)5e<o`gicWNT' );
define( 'AUTH_SALT',        'U(yR#N[:z5l^S6L:2Q]-m9)I>9R1@k<FL%S6:;?%qb0E)l75OI*UtVB4#|1N@b,)' );
define( 'SECURE_AUTH_SALT', 'd{CWFJ?&o`F^eIhEH:pIqYVD}*M8a2.L2)mMsI4Q4IK6[<mpOq=*AI;`gg%[&G.x' );
define( 'LOGGED_IN_SALT',   '=R:j@6:L4Ta7RX9-7?<eRB*siwB3wzcB&H/j ;]US@k,J.1YJi{^8pcLPcD%Ezw@' );
define( 'NONCE_SALT',       '}hM-[c[Eh9z_PZJko>8|ch!BZm9b1K*6+G{hq,PV#bjn{Ki!^wbz3W%T-eyN-F>-' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
