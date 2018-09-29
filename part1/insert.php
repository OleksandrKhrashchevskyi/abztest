
<?php

error_reporting(0);

$link = mysqli_connect('localhost', 'root', '', 'dbabz');


for ( $i=5001; $i<=10000
; $i++) {

    $resdb = mysqli_query($link,
        "INSERT INTO class5
(name5, money, class5, department) 
VALUES ('Orlando Blum', '3600', 'Private', " . $i . ") ");


}