<?php
#php基礎のタイトルをid参照してループで取り出し
require_once('views/index.php');

$id = $php->$_REQUEST['id'];
$php_all_titel=[];
$titel = $php->$_REQUEST['titel'];

while (!empty($id)){
    Php::find($id);
    $php_all_titel[] = $titel."\n";   
    }

#eloquentのタイトルをid参照してループで取り出し

$id = $elo->$_REQUEST['id'];
$elo_all_titel=[];
$titel = $elo->$_REQUEST['titel'];


while (!empty($id)){
    Elo::find($id);
    $elo_all_titel[] = $titel."\n";   
    }

#laravelのタイトルをid参照してループで取り出し

$id = $lara->$_REQUEST['id'];
$lara_all_titel=[];
$titel = $lara->$_REQUEST['titel'];

while (!empty($id)){
    Lara::find($id);
    $lara_all_titel[] = $titel."\n";   
    }