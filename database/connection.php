<?php

// $dbconnect = mysqli_connect('localhost', 'aifscomn_ai4fs', 'ai4fs__@@2023', 'aifscomn_ai4fs');
$dbconnect = mysqli_connect('localhost', 'root', '', 'aifscomn_ai4fs');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(!$dbconnect) {
    echo 'No';
}

?>