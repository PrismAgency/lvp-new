<?php
require_once('private/connect_db.php');

function showArticlesListe($id=null){
    global $dbh;

        $articles = $dbh->prepare('SELECT * FROM articles ');
        $articles->execute(array(
            'id' => $id
        ));
        $article = $articles->fetchAll();
    
    return $article;
}
