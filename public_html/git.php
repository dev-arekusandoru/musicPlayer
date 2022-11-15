<?php
include "../private_html/config.php";

$old_path = getcwd();
chdir('/var/www/private_html');
exec("ls -l", $items, $return_status);

foreach ($items as $key => $item) {
    printf("%s]<br>", $item);
}
exec('git fetch');
$run = exec('env -i git pull', $out, $res);
var_dump($run);

/*
exec('sh gitUpdate.sh');
chdir($old_path);

//header("Location: explore.php");*/