<?php

// BEGIN iThemes Security - Ne pas modifier ou supprimer cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactiver l’éditeur de fichier - Sécurité > Réglages > Modifications de WordPress > Éditeur de fichier
// END iThemes Security - Ne pas modifier ou supprimer cette ligne

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
define('DB_NAME', 'wordpress_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'ozn<#h?)Z0YF7V<^->II*$CXh |HF0YG8tAzVdiJf:-OX*fYL0~.kKe[v5ib?NWh');
define('SECURE_AUTH_KEY',  'IY2yPPwGIkwMFua<oVMYeZT>O2X8;7?C%Nc7LUz.%Yh(vpD=g/#cNTb_7t3!cZ#=');
define('LOGGED_IN_KEY',    'uq%RCt$P+hRHUM3_^9UF/]z|hOa=z@EJ_P* snD([,4zA#;#7-J^!trIrT}D#Sq|');
define('NONCE_KEY',        'wlz>9trv +7=m}1vucNfy *sm+p62olsxm@_-PAX_1Rlc9?/t`3 4 J{M>W2-4d1');
define('AUTH_SALT',        '#qhH^=-cO kDTWU[oHd1l1w]p;fzRf-BcvV%s;6pAPZqrbB$+J-iV=Y-7!hJA.FP');
define('SECURE_AUTH_SALT', 'fHGSdi=Qx#3fhNbG:K>]9/F,`zxG[}dk9Mftj;R+,Y=)O!Zk8U;;p*9(Y g5.Yal');
define('LOGGED_IN_SALT',   '/:/Em-nTqg|5BC]3K#TSbk[nt[*`3RQ-+S3m<g8EQ0Xs_YY?k&r?ZwRJIPHT}0lH');
define('NONCE_SALT',       'C$|_Bx<GjY.a_)4Ncn.ED9}+mvL?&j?pTT{-@GxfqNaG#Qb|Tk9b@kVE#J5 Z-fm');
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