<?php
$old_path = getcwd();
chdir('/var/www/private_html');
shell_exec('sh gitUpdate.sh');
chdir($old_path);