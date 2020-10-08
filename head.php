<?php
  ini_set('display_errors',1);
  ini_set('display_startup_erros',1);
  error_reporting(E_ALL);
  
  $useragent = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php echo isset($tituloPagina)?$tituloPagina:"Aprova Fácil Corporativo"; ?></title>
		
		<link rel="Shortcut icon" href="imagens/favicon2.png">
		<link rel="shortcut icon" href="imagens/favicon2.png" type="image/x-icon"/>   		
		
        <meta name="description" content="Aprova Fácil Corporativo">        
        <meta name="keywords" content="" />        
        <meta property="og:title" content="<?php echo isset($tituloPagina)?$tituloPagina:"Aprova Fácil Corporativo"; ?>"/>        
        <meta property="og:type" content="website"/>        
        <meta property="og:url" content=""/>        
        <meta property="og:image" content="imagens/share-img.jpg"/>        
        <meta property="og:site_name" content="Aprova Fácil Corporativo"/>        
        <meta property="og:description" content="Aprova Fácil Corporativo"/>        
        <meta name="OWNER" content="">        
        <meta name="RATING" content="Geral">        
        <meta name="ROBOTS" content="index,follow">
		
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" type="text/css" media="screen" />
		
    </head>
<body>