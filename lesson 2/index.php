<?php


function renderTemplate($page, $menu = '', $content = '', $about = '') {
    ob_start();
    include "templates/" . $page . ".php";
    return ob_get_clean();
}

$menu = renderTemplate("menu" );
$content = renderTemplate("content");
$about = renderTemplate("about");


echo renderTemplate("main", $menu, $content, $about);
