<?php
	//inclue o header
	$titulo = "#Hash Game";
	include('header.php');
	//quantidade de vitorias de ambos começa em 0
	$_SESSION['vjogador'] = 0;
	$_SESSION['vmaquina'] = 0;
?>
<div class="container-fluid bg-light">
	<div class="container" style="min-height: 90vh; margin-bottom: 5px;">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 mr-auto ml-auto text-center mt-3">
				<h1>Como funciona</h1>
				<p class="lead">
						<span style="color: red;">Este é um jogo da velha</span>, ao iniciar o jogo você pode escolher quem faz a primeira jogada (você ou a máquina), sempre que ocorrer uma vitória ou empate, a tabela de jogo é desabilitada e o placar atualizado, para jogar denovo basta clicar em jogar novamente, resete o placar clicando em resetar. Saiba quem somos clicando em "Sobre Nós".
				</p>
				<a class="btn btn-success" href="start.php?reset=1">Clique aqui para jogar agora</a>
			</div>
		</div>
	</div>
</div>
<?php
	//inclue o footer
	include('footer.php');
?>