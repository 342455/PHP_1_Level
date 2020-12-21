<?php
$title = "Главная страница - страница обо мне";


$page = file_get_contents("templates/main.html");
$page = str_replace("{{ title }}" , $title, $page);
echo $page;