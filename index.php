<?php declare(strict_types=1) ?> <!DOCTYPE html>
<html lang="cs-cz">
    <title>Blog</title>
<?php

// Úvod
echo 'Ahoj! Vítám tě na mém blogu!';
echo '<br />';
echo 'Nic zajímavého zde nenajdeš, protože zde pouze experimentuji.';
echo '<br />';

// Známky
$znamky=[];
$znamky[]= 1;
$znamky[]= 2;
$znamky[]= 5;
$znamky[]= 1;
$znamky[]= 1;
$znamky[]= 3;
$prumer= array_sum($znamky) / count($znamky);

echo '<br />';
echo 'Denní návštěvnost stránky: ' . $prumer;
echo '<br />';
echo '<br />';

// Kalkulačka
$soucet = $_POST['cislo1'] + $_POST['cislo2'];
echo("Výsledek $soucet");
echo '<br />';

// Datum atd...
$mesice = array('leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec');
$den = date('j');
$mesic = date('m');
$mesicSlovy = $mesice[$mesic - 1];
$rok = date('Y');

echo '<br />';
echo("Kdyby tě to zajímalo, tak dnes je $den. $mesicSlovy $rok");
echo '<br />';
echo '<br />';
echo 'Dev by toxirues ';
echo '<br />';