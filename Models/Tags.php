<?php


if (isset ($_GET['search_tag']) && !empty($_GET['searchTag']) ){
    $recherche = htmlspecialchars($_GET['searchTag']) ;
    $connexion = new PDO('mysql:host=localhost;dbname=tweet_academie', 'root', 'epitech');
    $query = "SELECT message from tweets where message like '%$recherche%' ";
    $result = $connexion->query($query);
    while($row= $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<br/>'  . $row['message'] . '<a></a>'. '<br/>' ;
 
 }
}

?>