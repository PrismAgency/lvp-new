<?php if(isset($_SERVER['SCRIPT_NAME']) && $_SERVER['SCRIPT_NAME'] == '/actualites.php'){ ?>    
   <!-- header -->
    <header id="header-principal">
      <nav class="navbar">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1 id="logo"><a class="navbar-brand" href="/home"><span class="icon-logo"></span></a></h1>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/home">Home</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        
        </div><!-- /.container-fluid -->
      </nav>
    </header><!-- /.header -->
<?php }else{  ?>
    <!-- header -->
        <header id="header-principal">
      <nav class="navbar">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1 id="logo"><a class="navbar-brand" href="index.php"><span class="icon-logo"></span></a></h1>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="actualites">Actualités</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        
        </div><!-- /.container-fluid -->
      </nav>
    </header><!-- /.header -->
<?php } ?>
