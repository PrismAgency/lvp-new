<?php
require_once('private/connect_db.php');

function showArticlesListe($id=null){
    global $dbh;
    if(isset($_GET['id'])){    
        $articles = $dbh->prepare('SELECT * FROM articles '
                . 'WHERE id = :id');
        $articles->execute(array(
            'id' => $id
        ));
        $article = $articles->fetchAll();
    }else{
        $articles = $dbh->prepare('SELECT * FROM articles ');
        $articles->execute(array(
            'id' => $id
        ));
        $article = $articles->fetchAll();
    }
    return $article;
}
