<?php
$xml=simplexml_load_file("changelog.xml") or die("Error: Cannot create object");
print_r($xml);
?>