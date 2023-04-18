<?php
$pdo = require 'db.php';

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL  PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL,
    phone TEXT (100) NOT NULL 
)');