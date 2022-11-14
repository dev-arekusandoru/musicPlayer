<?php
$old_path = getcwd();
chdir('/var/www/private_html');
$output = shell_exec('sh gitUpdate.sh');
echo $output . "<br>success";
chdir($old_path);