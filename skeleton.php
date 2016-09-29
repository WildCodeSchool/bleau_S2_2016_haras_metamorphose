<?php $GLOBALS['lang'] = 'fr';?>  <!--  On set temporairement la variable globale 'lang' à fr  -->

<!--  Liste des variables php à définir avant d'inclure skeleton.php :
  $page_title : le nom de la page invoquée
  $category :   la catégorie de votre page ('.
  -->
<?php/*
try {
    $db = new PDO('mysql:host=localhost;dbname=haras_de_la_metamorphose', 'root', 'toto');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$request = $db->exec('SELECT * FROM articles');
var_dump($request);
while($donnee = $request->fetch()){
    for($i=0; $i < count($donnee)/2; $i++)
        echo $key.":\t".$value.'<br/>';
}*/
?>
<?php echo '<html lang='.$GLOBALS["lang"].'>';?>    <!--  On écrit <html lang=[valeur de la variable lang]>   -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title><?php echo $page_title?></title>
</head>
<body>
    <?php
    echo "<div id='$category'>";
    include 'header.php';?>

    <!--  Éléments entre le header et les articles  -->

    <?php
    $articles = [
        array(
            'id' => 1,
            'title' => 'Blackberry 10 will do that!',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam blanditiis corporis earum et facere fugiat, fugit ipsam iusto laboriosam maiores molestias necessitatibus nulla repellat voluptate. Ab id officiis voluptates?",
            'image' => 'http://i.stack.imgur.com/rTZKA.png',
            'image_alt' => 'Image trop choupinoupinette de poneys et de licornes'
        ),
        array(
            'id' => 2,
            'title' => 'We made a lot of articles!',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam blanditiis corporis earum et facere fugiat, fugit ipsam iusto laboriosam maiores molestias necessitatibus nulla repellat voluptate. Ab id officiis voluptates?",
            'image' => 'http://i.stack.imgur.com/rTZKA.png',
            'image_alt' => 'Image trop choupinoupinette de poneys et de licornes'
        ),
        array(
            'id' => 3,
            'title' => 'USDA ignores Organic Standards Board\'s recommendation to prohibit nanoparticles in organic food',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam blanditiis corporis earum et facere fugiat, fugit ipsam iusto laboriosam maiores molestias necessitatibus nulla repellat voluptate. Ab id officiis voluptates?",
            'image' => 'http://i.stack.imgur.com/rTZKA.png',
            'image_alt' => 'Image trop choupinoupinette de poneys et de licornes'
        )
    ];
    /*$raw_articles = [];  // Récupère les données articles associées à la table dans la base de donnée
    while($article = $raw_articles->fetch())*/
    echo '<div id="skeleton">';
    foreach($articles as $article)
    {
        // $article
        echo '<section class="article article-'.$article['id'].'">'
                .'<div class="article-text">'
                    .'<h4>'.$article['title'].'</h4>'
                    .'<p>'.$article['content'].'</p>'
                .'</div>'   // Ferme la div 'article-text'
                .'<aside><img src="'.$article['image'].'" alt="'.$article['image_alt'].'"/></aside>'
            .'</section>';  // Ferme la section 'article-$article['id']'
    }

    echo '</div>"';     // Ferme la div '#skeleton'
    ?>

    <!--  Éléments entre les articles et le footer  -->

    <?php include 'footer.php';
    echo "</div>";  // Ferme la div '$category'
    ?>
    </div>
</body>
</html>