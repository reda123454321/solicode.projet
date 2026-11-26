<?php 

function getarticles($article){
    return "<h2>".htmlspecialchars($article["title"]). "</h2>"
    . "<p>". htmlspecialchars($article["content"]). "</p>";
}

?>