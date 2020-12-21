<?php
$menu = [
    [
        "title" => "Главная",
        "href" => "/lesson 3/"
    ],
    [
        "title" => "Каталог",
        "href" => "/lesson 3/?page=catalog",
        "subitems" => [
            [
                "title" => "Сумки",
                "href" => "/lesson 3/",
                "subitems" => [
                    [
                        "title" => "Мужские",
                        "href" => "/lesson 3/"
                    ],
                    [
                        "title" => "Женские",
                        "href" => "/lesson 3/"
                    ]
                ]
            ],
            [
                "title" => "Аксессуары",
                "href" => "/lesson 3/",
                "subitems" => [
                    [
                        "title" => "Ремни",
                        "href" => "/lesson 3/"
                    ],
                    [
                        "title" => "Прочее",
                        "href" => "/lesson 3/"
                    ]
                ]
            ]
        ]
    ],
    [
        "title" => "О нас",
        "href" => "/lesson 3/?page=about"
    ],
    [
        "title" => "Доставка",
        "href" => "/lesson 3/"
    ],
    [
        "title" => "Контакты",
        "href" => "/lesson 3/"
    ],
];

function getMenu($menuArray) {
    $output = "<ul>";

    foreach($menuArray as $item) {
        $output .= "<li><a href=\"{$item["href"]}\">{$item["title"]}</a>";
        if(isset($item["subitems"])) {
            $output .= getMenu($item["subitems"]);
        }
        $output .= "</li>";
    }
    $output .= "</ul>";
    return $output;
}

echo getMenu($menu);