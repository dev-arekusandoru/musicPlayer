<?php
$old_path = getcwd();
chdir('/var/www/private_html');
$output = shell_exec('./gitUpdate.sh');
chdir($old_path);
// note