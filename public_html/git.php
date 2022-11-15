<?php
$old_path = getcwd();
chdir('/var/www/private_html');
echo getcwd();
exec('sh gitUpdate.sh');
chdir($old_path);
