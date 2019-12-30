<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>OFUS - Project</title>
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
    <link href="css/shop-item.css" rel="stylesheet">

    <?php
	    include 'lib/Session.php';
	        Session::init();
	    include('lib/Database.php');
		
		spl_autoload_register(function($class){
			include_once "classes/".$class.".php";
		});

		$db     = new Database();
		$post   = new Post();
		$user   = new Admin();
	?>

</head>
<body>