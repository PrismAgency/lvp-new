
<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php'; ?>
  <body class="blog">

    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <section id="section-Title">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center">Actualités</h1>
            <h2 class="text-center">Découvrez toutes l'actualités de La vague pourpre</h2>
          </div>
        </div>
      </div>
    </section>

    <main class="section-padding">
      <div class="container"> <?php print_r($_SERVER); ?>
        <div class="row">
          <article class="col-lg-4">
            <section>
		<p><a class="twitter-timeline" data-height="600" data-dnt="true" data-theme="light" data-link-color="#2B94D6" href="https://twitter.com/LaVaguePourpre">Tweets by LaVaguePourpre</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></p>
              </section>
          </article>
	    
	  <article class="col-lg-4">
	      <section>
	      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLaVaguePourpre%2F&tabs=timeline&width=340&height=700&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	      </section>
          </article>  
        </div>
      </div>
    </main>

    <!-- footer principal -->
    <?php include 'includes/footer.php'; ?>

  </body>
</html>
