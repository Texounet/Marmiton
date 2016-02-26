<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
        <link rel="stylesheet" type="text/css" href="<?php echo(WEBROOT) ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo(WEBROOT) ?>css/<?php echo($controler); ?>.css">
        <script type="text/javascript" src="<?php echo(WEBROOT) ?>js/<?php echo($controler); ?>.js"></script>
        <script type="text/javascript" src="<?php echo(WEBROOT) ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    </head>
    <body>
    	<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a class="navbar-brand" href="<?php echo(WEBROOT) ?>controler1/index">Marmitton</a>
              <a class="navbar-brand" href="<?php echo(WEBROOT) ?>controlerRecherche/index">Recherche</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		  </div><!-- /.container-fluid -->
		</nav>

		<?php echo($content_for_layout); ?>
	</body>
</html>