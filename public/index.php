<?php

require '../vendor/autoload.php';

$element = new \App\HtmlElement('p', [], 'Este es el contenido');

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';


$element = new \App\HtmlElement('p', ['id' => 'my_paragram'], 'Este es el contenido');

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';


$element = new \App\HtmlElement('p', ['id' => 'my_paragram', 'class' => 'paragram'], 'Este es el contenido');

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');


echo '<br><br>';


$element = new \App\HtmlElement('img', ['src' => 'img/styde.png']);

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('img', ['src' => 'img/styde.png', 'title' => 'Curso de "Programación" en Styde']);

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';


$element = new \App\HtmlElement('input', ['required']);

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');
