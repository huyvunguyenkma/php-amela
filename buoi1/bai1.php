<?php
    CONST FIRST_NAME = 'Nguyen';
    $lastName = "Huy Vu";
    $fullName = FIRST_NAME . " " . $lastName;
    echo $fullName.'<br>';
    echo strlen($fullName).'<br>';
    echo FIRST_NAME . " " . str_replace("Vu", "Vy", $lastName);
?>
