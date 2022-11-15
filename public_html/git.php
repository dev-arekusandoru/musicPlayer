<?php
$old_path = getcwd();
chdir('/var/www/private_html');
echo getcwd();
shell_exec('sh gitUpdate.sh');
chdir($old_path);

header("Location: explore.php");