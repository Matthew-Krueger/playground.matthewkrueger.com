<?php
$output=null;
$retval=null;
exec('git pull', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
?.
