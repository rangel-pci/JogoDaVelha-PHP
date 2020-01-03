<?php
	//inclue o header
	$titulo = "Quem começa - #Hash Game";
	include('header.php');

	/* Dificuldade */
	$_SESSION['dificuldade'] = 'facil';
	/* guarda as escolhas feitas, pelo jogador e pela máquina */
	$_SESSION['escolha'] = ['z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z'];
	/* guarda a letra escolhida */
	$_SESSION['letra'] = 'z';
	//caso receba reset=1 ele reseta o placar
	if (isset($_GET['reset'])) {
		if ($_GET['reset'] == 1) {
			$_SESSION['vjogador'] = 0;
			$_SESSION['vmaquina'] = 0;
		}
	}
?>
		<div class="container-fluid bg-light">
			<div class="container text-center" style="min-height: 90vh;">
				<div class="row">
					<div class="col-12 mt-2">
						<form action="jogo.php" method="POST">
							<h2>Dificuldade:</h2>
							<label>
								Fácil
								<input class="m-1" type="radio" name="dificuldade" value="facil" checked="">
							</label>
							<label>
								Normal
								<input class="m-1" type="radio" name="dificuldade" value="normal">
							</label>
							<br>
							<h2>Escolha quem começa:</h2>
							<label>
								Eu
								<input class="m-1" type="radio" name="jogador" value="1" checked="">
							</label>
							<label>
								Máquina
								<input class="m-1" type="radio" name="jogador" value="2">
							</label>
							<br>
							<button class="btn bg-white" type="submit">Start</button>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php
	//inclue o footer
	include('footer.php');
?>