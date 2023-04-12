<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=bran-proj', 'root', '');
}

catch(PDOException $e) {
    die("Fout met verbinden van database: ".$e->getMessage());
}
?>