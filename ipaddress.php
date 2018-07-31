<?php

$delim = "\n";
$retval = 1;
$output = ['<pre>'];

exec('/sbin/ifconfig | grep "Link\|inet addr"', $output, $retval);

echo implode($delim, $output) . $delim . '</pre>';




