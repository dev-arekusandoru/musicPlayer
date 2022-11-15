<?php
include "../private_html/config.php";


$old_path = getcwd();
chdir('/var/www/private_html');
exec('sh gitUpdate.sh');
echo exec('sh gitUpdate.sh');
chdir($old_path);

//header("Location: explore.php");