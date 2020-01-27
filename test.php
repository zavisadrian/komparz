<?php
session_start();
echo json_encode($_SESSION['result'], JSON_UNESCAPED_UNICODE);