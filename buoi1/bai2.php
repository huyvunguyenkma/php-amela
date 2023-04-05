<?php
    $project = [
        'name' => '',
        'projectManager' => 'Nguyễn Huy Vũ',
        'developer' => [],
        'tester' => []
    ];
    $project["name"] =  "Làm giàu";
    $var = ["Nguyễn Văn A"];
    $project["developer"] = ["Dev A", "Dev B", "Dev C"];
    $project["tester"] = ["Test A", "Test B", "Test C"];

    array_push($project, $project["comtor"] = "Comtor A");

    echo 'Name of project: ' . $project["name"] . '<br>';
    array_shift($project["developer"]);
    array_splice($project["developer"], 2, 0, "dev D");
    echo "Dev list: ".implode(", ", $project["developer"]);
?>
