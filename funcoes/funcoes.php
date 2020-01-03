<?php
/* Exibe um botão para jogar novamente e um para restar o placar */
function jogaereseta(){
	echo "
	<div class='row'>
		<div class='col-12 text-center'>".
			"<a class='btn btn-dark text-light mt-2 mb-2' href='start.php'>Jogar novamente</a> <a class='btn btn-dark  text-light' href='start.php?reset=1'>Resetar</a>"
		."</div>
	</div>
	";
}

/* Exibe o placar */
function placar(){
	echo "
	<div class='row'>
		<div class='col-12 text-center'>
		<h3>Placar</h3>
		</div>
	</div>
	<div class='row'>
		<div class='col-12 text-center mb-3'>".
		"<center>
			<table class='text-center'>
				<tr>
				<th>Jogador</th><th>Máquina</th>
				</tr>
				<tr>
				<td>".$_SESSION['vjogador']."</td><td>".$_SESSION['vmaquina']."</td>
				</tr>
				</table>
			</center>"
		."</div>
	</div>";
}

/* pinta a tabela */
function pintatabela($vermelho, $verde){
	echo "<style>";
	for ($i=0; $i < 9; $i++) { 
		if ($_SESSION['escolha'][$i] == 'x') {
			echo "#celula".$i.", #celula".$i." > button{ background: ".$vermelho." ; color: ".$vermelho."; }\n";
		}else if($_SESSION['escolha'][$i] == 'o'){
			echo "#celula".$i.", #celula".$i." > button{ background: ".$verde." ; color: ".$verde."; }\n";
		}
	}
	echo "</style>";
}

/* verifica se ganhou */
function verificavitoria($letra){
		//Possibilidade 1
	if ( ($_SESSION['escolha'][0] == $letra && $_SESSION['escolha'][1] == $letra && $_SESSION['escolha'][2] == $letra) ) {
		return true;
		//possibilidade 2
	}elseif ( ($_SESSION['escolha'][0] == $letra && $_SESSION['escolha'][4] == $letra && $_SESSION['escolha'][8] == $letra) ) {
		return true;
		//possibilidade 3
	}elseif ( ($_SESSION['escolha'][0] == $letra && $_SESSION['escolha'][3] == $letra && $_SESSION['escolha'][6] == $letra) ) {
		return true;
		//possibilidade 4
	}elseif ( ($_SESSION['escolha'][1] == $letra && $_SESSION['escolha'][4] == $letra && $_SESSION['escolha'][7] == $letra) ) {
		return true;
		//possibilidade 5
	}elseif ( ($_SESSION['escolha'][2] == $letra && $_SESSION['escolha'][5] == $letra && $_SESSION['escolha'][8] == $letra) ) {
		return true;
		//possibilidade 6
	}elseif ( ($_SESSION['escolha'][2] == $letra && $_SESSION['escolha'][4] == $letra && $_SESSION['escolha'][6] == $letra) ) {
		return true;
		//possibilidade 7
	}elseif ( ($_SESSION['escolha'][3] == $letra && $_SESSION['escolha'][4] == $letra && $_SESSION['escolha'][5] == $letra) ) {
		return true;
		//possibilidade 8
	}elseif ( ($_SESSION['escolha'][6] == $letra && $_SESSION['escolha'][7] == $letra && $_SESSION['escolha'][8] == $letra) ) {
		return true;
	}else{
		return false;
	}
}
/* verifica se ganhou */
?>
<?php
/* Função para montar a tabela */
		function tabela($letra){
?>
				<center>
					<form action="jogo.php" method="POST">
						<table class="mt-3" id="tabela1" style="max-width: 400px;text-align: center;">
							<tr>
								<td id="celula0">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="0x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="0o">O</button>
								</td>
								<td id="celula1">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="1x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="1o">O</button>
								</td>
								<td id="celula2">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="2x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="2o">O</button>
								</td>
							</tr>
							<tr>	
								<td id="celula3">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="3x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="3o">O</button>
								</td>
							
								<td id="celula4">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="4x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="4o">O</button>
								</td>
								<td id="celula5">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="5x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="5o">O</button>
								</td>
							</tr>
							<tr>
								<td id="celula6">
									<button <?php if($letra == 'o'){echo "disabled=''";;}?> type="submit" name="celula" value="6x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="6o">O</button>
								</td>
								<td id="celula7">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="7x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="7o">O</button>
								</td>
								<td id="celula8">
									<button <?php if($letra == 'o'){echo "disabled=''";}?> type="submit" name="celula" value="8x">X</button>
									<button <?php if($letra == 'x'){echo "disabled=''";}?> type="submit" name="celula" value="8o">O</button>
								</td>
							</tr>
						</table>
					</form>
				</center>
				<?php
			}
		?>
<?php

	/* Função para montar a tabela desabilitada */
		function tabela2(){
?>				
			<center>
				<form action="jogo.php" method="POST">
					<table class="mt-3" id="tabela2" style="max-width: 100%; text-align: center;">
						<tr>
							<td id="celula0">
								<button disabled="" type="submit" name="celula" value="0x">X</button>
								<button disabled="" type="submit" name="celula" value="0o">O</button>
							</td>
							<td id="celula1">
								<button disabled="" type="submit" name="celula" value="1x">X</button>
								<button disabled="" type="submit" name="celula" value="1o">O</button>
							</td>
							<td id="celula2">
								<button disabled="" type="submit" name="celula" value="2x">X</button>
								<button disabled="" type="submit" name="celula" value="2o">O</button>
							</td>
						</tr>
						<tr>	
							<td id="celula3">
								<button disabled="" type="submit" name="celula" value="3x">X</button>
								<button disabled="" type="submit" name="celula" value="3o">O</button>
							</td>
						
							<td id="celula4">
								<button disabled="" type="submit" name="celula" value="4x">X</button>
								<button disabled="" disabled="" type="submit" name="celula" value="4o">O</button>
							</td>
							<td id="celula5">
								<button disabled="" type="submit" name="celula" value="5x">X</button>
								<button disabled="" type="submit" name="celula" value="5o">O</button>
							</td>
						</tr>
						<tr>
							<td id="celula6">
								<button disabled="" type="submit" name="celula" value="6x">X</button>
								<button disabled="" type="submit" name="celula" value="6o">O</button>
							</td>
							<td id="celula7">
								<button disabled="" type="submit" name="celula" value="7x">X</button>
								<button disabled="" type="submit" name="celula" value="7o">O</button>
							</td>
							<td id="celula8">
								<button disabled="" type="submit" name="celula" value="8x">X</button>
								<button disabled="" type="submit" name="celula" value="8o">O</button>
							</td>
						</tr>
					</table>
				</form>
			</center>
<?php
		}
?>