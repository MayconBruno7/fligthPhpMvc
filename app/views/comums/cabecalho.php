<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Framework|Flight|MVC</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index">Framework/Flight/MVC</a>
                </div>
                 <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/index">Tela inicial</a></li>
                        <li><a href="/categoria">Categorias</a></li>
                        <li><a href="/sobreNos">Sobre nós</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right">
                        @if (isset($_SESSION["Membership"]["UserID"]) && isset($_SESSION["Membership"]["AuthToken"]))
                            <li><a href="profile/{{ $_SESSION["Membership"]["Name"] }}/edit"><span class="glyphicon glyphicon-user"></span> Bem vindo, {{ $_SESSION["Membership"]["Name"] }}!</a></li>
                            <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        @else
                            <li><a href="sign-up"><span class="glyphicon glyphicon-user"></span> Criar conta</a></li>
                            <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
                        @endif
                    </ul> -->
                </div>
            </div>
        </nav>
	
