
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../imagens/4.jpg">

    <title>News4You</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap-3.3.2/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="../imagens/news4you.jpg" alt="logo" width="150px" height="150px" class="navbar-brand">
        </div>
        <div class="navbar-text">
          <label id="search"><span id="search">Procurar por:</span>
          <input type="text"></label>
  </div>
  <div id="navbar" class="collapse navbar-collapse">
  <ul class="nav navbar-nav navbar-right">
        	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Registo</a></li>
        	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="principal">
				<img src="../imagens/preso.jpg" align="middle">
				<h5><b>15.03.2015</b> 00:38</h5>
				<h1>Português preso por crime brutal</h1>
				
				
				<h6>Por <b>Miguel Curado</b>
				<hr>
				<p>Um português está entre os cinco membros de um violento gang de assaltantes suspeito do roubo à casa de um empresário na zona de Valência, em Espanha. A vítima foi torturada pelos membros do gang, vindo a morrer por estrangulamento. 
				<br><br>
				O crime remonta a 22 de janeiro e vitimou o empresário Miguel Veses, ligado ao ramo imobiliário, e que residia numa moradia. Familiares encontraram o corpo da vítima no chão da sala, com as mãos amarradas com fio elétrico. Tinha sinais de agressão a murro e pontapé, aparentando morte por estrangulamento. 
				<br><br>
				A autópsia comprovou as suspeitas, revelando mesmo que Miguel Veses foi torturado durante várias horas, alegadamente para que revelasse onde guardava o cofre. 
				<br><br>
				Após constatar a morte da vítima, o gang acabou por fugir sem roubar nada. Na madrugada de sexta-feira, a Guardia Civil avançou para buscas às residências dos suspeitos, prendendo os cinco.
				<br><br>
				O gang é também suspeito de uma vaga de assaltos a outras residências. São amanhã presentes a tribunal.</p>
			</div>	
		</div>
        <div id="HCB_comment_box">
		<form action="/html/tags/html_form_tag_action.cfm" method="post">
			Comentários (0):<br />
			<textarea name="comments" id="comments" cols="60" rows="5">
			</textarea><br />
			<input type="submit" value="Comentar" />
		</form>
		</div>
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Início</a>
            <a href="#" class="list-group-item">Política</a>
            <a href="#" class="list-group-item">Economia</a>
            <a href="#" class="list-group-item">Cultura</a>
            <a href="#" class="list-group-item">Mundo</a>
            <a href="#" class="list-group-item">Desporto</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
	  <br>
      <hr>

      <footer>
        <p>&copy; News4You</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap-3.3.2/js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>
  </body>
</html>
