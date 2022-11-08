<?php
$output = shell_exec('git fetch');
echo "<pre>$output</pre>";
$output = shell_exec('git pull');
echo "<pre>$output</pre>";