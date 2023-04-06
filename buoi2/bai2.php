<?php
    $project = [
        'name' => '',
        'projectManager' => 'Nguyễn Huy Vũ',
        'developer' => [],
        'tester' => []
    ];
    $project["name"] =  "Làm giàu";
    $var = ["Nguyễn Văn A"];
    array_push($project["developer"], "Dev A");
    array_push($project["developer"], "Dev B");
    array_push($project["developer"], "Dev C");
    array_push($project["tester"], "Test A");
    array_push($project["tester"], "Test B");
    array_push($project["tester"], "Test C");

    array_push($project, $project["comtor"] = "Comtor A");

    echo 'Name of project: ' . $project["name"] . '<br>';
    array_shift($project["developer"]);
    array_splice($project["developer"], 2, 0, "dev D");
    echo "Dev list: ".implode(", ", $project["developer"]);
?>