<?php
    echo '<b>Part 1:</b><br>';
    function tinhTienDien($soDien): float|int
    {
        if (is_null($soDien) || is_string($soDien))
            return 0;
        if ($soDien < 50)
            return $soDien * 3500;
        if ($soDien < 100)
            return $soDien * 4000;
        if ($soDien < 200)
            return $soDien * 5000;
        return $soDien * 6000;
    }

    echo tinhTienDien("d");
    echo '<br><br><b>Part 2</b>:<br>';


    $numbers = range(0, 9);
    shuffle($numbers);
function switch_convert($value): string
{
    switch ($value) {
        case '0' :
            return 'Số không';
        case '1' :
            return 'Số một';
        case '2' :
            return 'Số hai';
        case '3' :
            return 'Số ba';
        case '4' :
            return 'Số bốn';
        case '5' :
            return 'Số năm';
        case '6' :
            return 'Số sáu';
        case '7' :
            return 'Số bảy';
        case '8' :
            return 'Số tám';
        case '9' :
            return 'Số chín';
        default :
            return '';
    }
}
function match_convert($value): string
{
    return match($value){
        0 => 'Số không',
        1 => 'Số một',
        2 => 'Số hai',
        3 => 'Số ba',
        4 => 'Số bốn',
        5 => 'Số năm',
        6 => 'Số sáu',
        7 => 'Số bảy',
        8 => 'Số tám',
        9 => 'Số chín',
        default => "Giá trị ($value) không nằm trong phạm vi xử lý",
    };
}

foreach ($numbers as $value) {
    echo switch_convert($value). '<br>';
}
echo "<hr>cái này dùng match: <br>";
foreach ($numbers as $value) {
    echo match_convert($value). '<br>';
}

echo '<hr> Part 3: <br><br>';
$student = [['name' => 'Nguyen A', 'schoolId' => '1'],
    ['name' => 'Nguyen B', 'schoolId' => '1'],
    ['name' => 'Nguyen C', 'schoolId' => '2']];
$school = [['id' => 1, 'name' => 'MTA'],
    ['id' => 2, 'name' => 'KMA']];

echo 'Danh sách trường với học sinh:';
foreach ($school as $item) {
    echo '<br>'.$item['name'].': ';
    foreach ($student as $infoStudent) {
        if ($infoStudent['schoolId'] == $item['id']) {
            echo $infoStudent['name'].'  ';
        }
    }
}
echo '<hr> Part 4: <br><br>';

$users = [['id' => 1, 'name' => 'Trương Mỹ Lan'],
    ['id' => 2, 'name' => 'Trịnh Văn Quyết'],
    ['id' => 3, 'name' => 'Tô Anh Dũng'],
];
$posts = [['user_id' => 1, 'name' => 'Vụ án Vạn Thịnh Phát'],
    ['user_id' => 2, 'name' => 'Thao túng thị trường chứng khoán'],
    ['user_id' => 3, 'name' => 'Chuyến bay giải cứu'],
];

function merge(array $users, array $posts): array
{
    $news = [];
    $id = 0;
    foreach ($users as $user) {
        foreach ($posts as $post) {
            if ($post['user_id'] == $user['id']) {
                $news[] = [
                    'id' => $id++,
                    'name' => $user['name'],
                    'post_name' => $post['name']
                ];
                break; // way 1
//                continue 2; (way 2)
            }
        }
    }
    return $news;
}

$news = merge($users, $posts);

foreach ($news as $new) {
    foreach ($new as $key => $item) {
        echo '[('.$key.') ' . $item.']';
    }
    echo ';<br>';
}

