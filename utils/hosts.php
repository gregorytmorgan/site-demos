<?php

$delim = "\n";
$retval = 1;
$output = ['<pre>'];

exec('/bin/cat /etc/hosts', $output, $retval);

echo implode($delim, $output) . $delim . '</pre>';


