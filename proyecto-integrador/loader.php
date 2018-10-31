<?php

require 'helpers.php';
require 'Classes/User.php';
require 'Classes/Auth.php';
require 'Classes/JSONDB.php';
require 'Classes/Validate.php';

$db = new JSONDB('users.json');

Auth::set();