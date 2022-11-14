<?php
$old_path = getcwd();
chdir('/var/www/private_html');
echo shell_exec('sh gitUpdate.sh');
echo "success";
chdir($old_path);