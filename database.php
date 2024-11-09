<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=brand-proj', 'root', '');
}

catch(PDOException $e) {
    die("Fout met verbinden van database: ".$e->getMessage());
}
?>