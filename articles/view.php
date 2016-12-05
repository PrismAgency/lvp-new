<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index">
    <meta name="identifier-url" content="https://www.lavaguepourpre.com">
    <meta name="reply-to" content="La Vague Pourpre"/>
    <link rel= "icon" type="image/png" href="images/logo.png"/>
    <meta name="author" content="Prism Agency"/>
    <meta name="description" content="Rien n’échappe à ses yeux. Tout est nu devant lui et dominé par son regard. C’est à lui que nous aurons à rendre des comptes."/>
    <meta name="keywords" content ="anarchiste libertaire anti-capitaliste"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>La vague pourpre</title>

    <!-- fichier css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
      <?php include('./includes/header.php'); ?>
<?php 

if(isset($_GET['id']) && !empty($_GET['id'])){ 
    $id = filter_input(INPUT_GET, 'id');
    
	foreach($articles as $article):
        $title = 'Article : ' . $article['article'];
    endforeach; 
    
?>    

<section class="dataWrap">
    <?php
        foreach($articles as $article):
          echo $article['id'];
  endforeach;
	?>
            
<?php
}else{
?>
<section>  
    <div class="container">
	<div clas="row">
    <?php
        foreach($articles as $article):
    ?>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<h2 class="text-center"><?= $article['titre']; ?></h2>
		<img class="text-center" src="/<?= $article['image'] ?>"/>
		<p class="text-justify"><?=$article['description']?></p>
	    </div>
		<?php
	  endforeach;
    ?>
	</div>
    </div>
</section>
   
<?php
}
?>
    <!-- footer principal -->
    <footer id="footer-principal">
      <div class="container-fluid">
        <div class="row">

            <div id="social-media" class="col-lg-3 col-md-3 col-sm-12">
                <p id="share" class="s-H-A-R-E">S<br />H<br />A<br />R<br />E</p>
              <ul id="rs">
		 <li id="logo-facebook"> 
		    <a href="https://www.facebook.com/LaVaguePourpre/?fref=ts" target="_blank" id="facebook">facebook</a>
		 </li>
		 <li id="logo-twitter">
		    <a href="https://twitter.com/LaVaguePourpre" target="_blank" id="twitter">twitter</a>
		 </li>
              </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12"></div>
          <div id="copyright" class="col-lg-3 col-md-3 col-sm-12">
            <p>La Vague Pourpre - 2016 - <a href="#">mentions légales</a></p>
          </div>

        </div>
      </div>
    </footer>
    <!-- /.footer principal -->
    <?php include('./includes/footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jQuery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>

  </body>
</html>
