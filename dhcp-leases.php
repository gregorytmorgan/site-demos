<?php

$delim = "\n";
$retval = 1;
$output = ['<pre>'];

exec('/bin/cat /var/lib/dhcp/dhclient.leases', $output, $retval);

echo implode($delim, $output) . $delim . '</pre>';


