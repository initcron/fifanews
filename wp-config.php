<?php
define( 'WP_ALLOW_REPAIR', true );
define('DB_NAME', 'fifanews');
define('DB_USER', 'fifa');
define('DB_PASSWORD', 'supersecure1234');
define('DB_HOST', '10.40.1.101');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         'mM)O8d%[Lq{9o$EgW,c.kkeM9KD,h=2@T=d,SAH|XS<?xz7n8bPoXZ&v/@JQ+EpC');
define('SECURE_AUTH_KEY',  'sjfGKv3+_D(lP)S>Ceg=1HT1O|Ujh0we9gBH%*OQ:UuUAnb<mW^p3+0BSFfHvAxS');
define('LOGGED_IN_KEY',    'xIa~_=J%4tvgS5Go^M{?p.7I1HbY<1GiMkcX-TH9|i2@[p=|%3>V@iJ%&@7q|@R1');
define('NONCE_KEY',        'q5>^>1K(&T- O9W8)S2^9QHanz-,)Ptt<3;UG~#C}Vb6M3am|R,+Yx<Vm+g]72pG');
define('AUTH_SALT',        'IcQ[+7hTd/a9@<<M|E- :Q ]!&hR!ub#$P$Kl*MR{5=y*[Q2>bs=yacZ@vAau71k');
define('SECURE_AUTH_SALT', 'Z<yh_x][c>{LD]??rjqX6kzla:7U&|63x/Dc7`8|Eu|&V*3K(~l?HC4EY^P!]ymW');
define('LOGGED_IN_SALT',   'qqUJ&gYPcl&,1nwDuzAK;:g(>O];#6Kd.|R+OA&6Yus2{y>t4z-RuX<s_4j@._-d');
define('NONCE_SALT',       'bzN|`l:+d>^4+opyXDGn@RcOQ,grN,L,,o(H)Xo.-:;<j;X$3nGIp&LJw&]^4)AF');
$table_prefix  = 'wp_';
define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

