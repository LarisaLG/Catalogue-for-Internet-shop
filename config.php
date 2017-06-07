<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DB", "apple");

$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die("There is no connection with Database");
mysqli_set_charset($connection, "utf8") or die("Not set coding connection");