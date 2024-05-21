<?php
/* moncycle.app
**
** licence Creative Commons CC BY-NC-SA
**
** https://www.moncycle.app
** https://github.com/jean-io/moncycle.app
*/

require_once "../config.php";
require_once "../lib/db.php";
require_once "../lib/sec.php";

$db = db_open();

$pass_text = sec_motdepasse_aleatoire();
$pass_hash = sec_hash($pass_text);
db_update_motdepasse_par_mail($db, $pass_hash, $argv[1]);
echo "Un nouveau mot de passe a été créé pour l'email $argv[1] :";
echo "$pass_text";
echo PHP_EOL;