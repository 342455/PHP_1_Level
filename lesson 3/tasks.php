<?php

// 1

$i = 0;
while ($i <= 100) {
    if($i % 3 == 0) {
        echo $i;
    }
}

// 2

$h = 0;
do {
    if($h == 0) {
        echo $h . "ноль <br>";
    } elseif($h % 2 != 0) {
        echo $h . "нечетное число <br>";
    } else {
        echo $h . "четное число <br>";
    }
} while ($h <= 10);


//3, 8

$cities = [
    "Московская область" => ["Воскресенкс", "Подольск", "Люберцы"],
    "Ленинградская область" => ["Выборг", "Кириши", "Волхов"],
    "Рязанская область" => ["Михайлов", "Кораблино", "Шацк",]
];

foreach($cities as $key => $region) {
    echo $key . ": <br>";
    $str = "";

    foreach($region as $city) {
        //добавили проверку на 'K'
        if(mb_substr($city, 0, 1, "UTF-8") === "К") {
            $str .= $city . ", ";
        }
    }

    $str = mb_substr($str, 0, -2) . "<br>";
    echo "$str <br>";
}

//4
$str = "стрОкА под транслит.";

$alfabet = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];

$result = "";


for ($i = 0; $i < mb_strlen($str); $i++) {
    $text = mb_substr($str, $i, 1);

    if (isset($alfabet[mb_strtolower($text)])) {

        if ($text === mb_strtoupper($text)) {
            $eng_text = mb_strtoupper($alfabet[mb_strtolower($text)]);
        } else {
            $eng_text = $alfabet[$text];
        }

    } else {
        $eng_text = $text;
    }
    $result .= $eng_text;
}


//5

function wspace(){
    return str_replace(" ", "_", $str);
}


//6 - на движке

//7

for ($f = 0; $f < 10; print $f++) {}


