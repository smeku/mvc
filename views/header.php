<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Project name</title>

    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet">
    <link href="/public/css/video.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/public/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      
      
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL; ?>/">TE<b>FILMY</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                <li<?php if ($this->menuActiv == 'index') { ?> class="active"<?php } ?>><a href="/index">Home</a></li>
                <li<?php if ($this->menuActiv == 'kontakt') { ?> class="active"<?php } ?>><a href="/kontakt">Kontakt</a></li>
          </ul>  
         

                     <form class="navbar-form navbar-nav">
                    <div class="input-group">
                    <input type="text" class="form-control col-lg-6" placeholder="Search...">
                    <span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
                    </div>
                         </form>
   
            
  

          <ul class="nav navbar-nav navbar-right">
                <?php if( Session::get('loggedIn') == 1 ): ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Session::get('loggedEmail'); ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/login/logout">Wyloguj</a></li>
                </ul>
              </li>
                 <?php else: ?>
                <li<?php if ($this->menuActiv == 'login') { ?> class="active"<?php } ?>><a href="/login">Logowanie</a></li>
                <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
      
      
    <div class="container">

