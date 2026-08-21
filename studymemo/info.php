<?php
$id = Stady->$_GET['id'];
$titel = Staday->$_REQUEST['titel'];
$content = Stady->$_REQUEST['content'];

if(isset($_GET['id'])){
    Stady::find($id);
    $stady->memo = $_REQUEST['memo'];
    $stady->save();
}

