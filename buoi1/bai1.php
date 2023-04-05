<?php
    CONST FIRST_NAME = 'Nguyen';
    $lastName = "Huy Vu";
    $fullName = FIRST_NAME . " " . $lastName;
    echo $fullName.'<br>';
    echo str_replace("Huy Vu", "Van A", $fullName);
?>
