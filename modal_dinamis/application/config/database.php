<?php
$base_url = 'http://localhost/modal_dinamis';
define('DBHOST', 'localhost');
define('DBUSER', 'username');		// Username db anda
define('DBPASS', 'password');	  // Password db anda
define('DBNAME', 'database');		// Nama db anda
$db = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if ($db->connect_error) {
    die("Could not connect to database: " . $db->connect_error);
}
/* End of file application/config/database.php */
