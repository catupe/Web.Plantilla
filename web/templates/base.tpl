<!DOCTYPE html>
<HTML>
<HEAD>

	<TITLE>{$titulo_proyecto}</TITLE>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="img/favicon.ico" rel="shortcut icon">

	<link rel="stylesheet" href="../lib/bootstrap-3.3.2-dist/css/bootstrap.min.css">

	<!--<script type="text/javascript" src="recursos/ladda-bootstrap-master/dist/spin.min.js"></script>-->
	<!--<script type="text/javascript" src="recursos/ladda-bootstrap-master/dist/ladda.min.js"></script>-->
	<!--<script src="recursos/js/url.js"></script>-->
	<!--<script src="recursos/js/gral.js"></script>-->


	<link rel="stylesheet" href="css/style.css">
	<!--<link href="recursos/ladda-bootstrap-master/dist/ladda-themeless.min.css" rel="stylesheet">-->

	{$head}
</HEAD>

<BODY>
	{include file="$menu"}
	
    <div class="container">
		<div class="row">
			<div class="col-md-12 contenido-pagina">
				{include file="$mensajes"}
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">	
				<h1>{$titulo_pagina}</h1>
				{include file="$pagina"}
			</div>		
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../lib/jquery-1.11.2/jquery-1.11.2.min.js"></script>
   	<script src="../lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
	<script src="../lib/bootstrap-3.3.2-dist/docs/assets/js/docs.min.js"></script>
	<script src="js/urls.js"></script>
	<script src="js/gral.js"></script>
	{$scripts}
 	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
</body>
</html>