<?php

require_once 'Database.php';

$db = new Database('/home/niklavs/Documents/phone.db');

$result = $db->query('SELECT * FROM PhoneBank');
var_dump($result->fetchArray());