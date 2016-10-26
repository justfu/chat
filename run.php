<?php
ob_implicit_flush();
require_once 'webchat.class.php';
$socket=new webchat('127.0.0.1',80);
$socket->run();
