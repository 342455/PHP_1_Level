<?php
define('TEMPLATES_DIR', './templates/');
define('LAYOUTS_DIR', './layouts/');

if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$catalog = [
    [
        'name' => 'Сумка',
        'price' => 5000
    ],
    [
        'name' => 'Кошелек',
        'price' => 1000
    ],
    [
        'name' => 'Ремень',
        'price' => 800
    ],
    [
        'name' => 'Ручка',
        'price' => 300
    ]
];

$params = [];

switch ($page) {
    case 'index':
        $params['name'] = 'Админ';
        break;

    case 'catalog':
        $params['catalog'] = $catalog;
        break;

    case 'apicatalog':
        echo json_encode($catalog, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
        die();
        break;
}

echo render($page, $params);


function render($page, $params = []) {
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}

function renderTemplate($page, $params = []) {

    extract($params);
    ob_start();
    $fileName = TEMPLATES_DIR . $page . ".php";
    if(file_exists($fileName)) {
        include $fileName;
    }
    return ob_get_clean();
}

