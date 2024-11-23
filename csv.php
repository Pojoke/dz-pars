<?php
// Массив данных, представляющий библиотеку
require "db.php";

$ser = serialize($library);


file_put_contents('library.txt', $ser);


