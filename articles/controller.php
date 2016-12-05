<?php
require_once('model.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $articles = showArticlesListe($id);
    
}else{
    $articles = showArticlesListe();
}

include_once('view.php');
