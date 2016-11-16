<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/site/4.jpg">

    <title>News4You</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap-3.3.2/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/offcanvas.css" rel="stylesheet">
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="{$BASE_URL}javascript/main.js"></script>
	

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
          <a href="{$BASE_URL}pages/noticias/homepage.php"><img src="../../images/site/news4you.jpg" alt="logo" width="150px" height="150px" class="navbar-brand"></a>
        </div>
        <div class="navbar-text">
          <label id="search">
		  <form action="{$BASE_URL}pages/pesquisa/palavras.php" method="post">
			<span id="search">Procurar:</span></label> <input  size="25" placeholder="palavras separadas por espaços" type="text" name="palavraschave" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; } ">
		  </form>
  </div>
  
  {if $EMAIL}
	{include file='common/menu_utilizador.tpl'}
  {else}
	{include file='common/menu_visitante.tpl'}
  {/if}
  
 
  
    {foreach $ERROR_MESSAGES as $error}
       <div class="jumbotron">{$error}<a class="close">X</a></div>
    {/foreach}
   
    {foreach $SUCCESS_MESSAGES as $success}
		<div class="jumbotron">{$success}<a class="close">X</a></div>
    {/foreach}
    