<?php

$config = require ('config.php');
require_once('functions.php');

$configDB = $config['db'];
connectDB($configDB['host'], $configDB['username'], $configDB['password'], $configDB['db']);


	if (isset($_GET['action']) && $_GET['action'] === 'deconnexion') {
			unset($_SESSION['user']);
			header ("Location: login.php");
		}

