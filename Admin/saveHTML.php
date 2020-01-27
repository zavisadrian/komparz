<?php
$data = $_REQUEST["sourceCode"];

file_put_contents(date('Y-m-d-h:i:s', time()).".html", $data);