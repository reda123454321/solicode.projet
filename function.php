<?php 
function getarticles($articles, $id){
    $article_selected=null;
    foreach($articles as $article){
        if($id==$article["id"]){
            $article_selected=$article;
            break;
        }
      
}
return $article_selected;
}
?>