<?php

require 'helpers.php';
require 'Classes/User.php';
require 'Classes/Auth.php';
require 'Classes/Db.php';
require 'Classes/QueryBuilder.php';
require 'Classes/Validate.php';

$pdo = DBConnector::ConnectDB();

$usuarios = QueryBuilder::index("categories", $pdo);

var_dump($usuarios);