<?php session_start(); 
?>
<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<title><?=$titulo?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Link de css do bootstrap 4 -->
		<link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
		<style type="text/css">
			button{
				padding: 10px;
				background: none;
				color: white;
				border: none;
				cursor: pointer;
			}
			table{
				background: grey;
				border: 5px solid lightblue;
			}
			td{
				border: 1px solid lightblue;
			}
			#tabela1, #tabela2{
				width: 400px;
				height: 300px;
			}
			@media screen and (max-width: 720px){
				#tabela1, #tabela2{
					width: 350px;
					height: 300px;
				}
			}
			@media screen and (max-width: 480px){
				#tabela1, #tabela2{
					width: 250px;
					height: 200px;
				}
			}
		</style>
	</head>
	<body>
		<header class="bg-success">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-md bg-success navbar-dark">
					<a href="index.php" class="navbar-brand">#Hash Game</a>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
						<li class="nav-item"><a class="nav-link" href="start.php?reset=1">Novo Jogo</a></li>
						<li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
						<li class="nav-item"><a class="nav-link" rel="noopener noreferrer" target="_blank" href="https://github.com/rangel-pci">
							<svg class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="30" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
						</a></li>
					</ul>
				</nav>
			</div>
		</header>