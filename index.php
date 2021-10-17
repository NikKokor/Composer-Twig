<?php
require 'C:\Users\nikko\PhpstormProjects\Composer-Twig\vendor\autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(dirname(__DIR__) . '\Composer-Twig\templates');
$twig = new Environment($loader);

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo $twig->render('index.html', array('arr' => $arr));