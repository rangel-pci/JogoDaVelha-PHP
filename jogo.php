<?php
	//inclue o header
	$titulo = "Hora do Jogo - #Hash Game";
	include('header.php');
?>
<div class="container-fluid bg-light" style="min-height: 90vh;">
		<div class="row">
			<div class="col-12">
				<?php
					//inclui as funções
					require('funcoes/funcoes.php');
					//tempo
					$verde = 'green';
					$vermelho = 'red';
					$jogador = 1;

					/* recebe a dificuldade */
					if (isset($_POST['dificuldade'])) {
						$_SESSION['dificuldade'] = $_POST['dificuldade'];
					}
					/* recebe o jogador */
					if (isset($_POST['jogador'])) {
						$jogador = $_POST['jogador'];
					}
					if ($jogador == 1) {
						/* recebe a celula e uma letra do jogador */
						if(isset($_POST['celula'])){
							$_SESSION['celula'] = str_split($_POST['celula']);
							$numero = $_SESSION['celula'][0];
							$letra = $_SESSION['celula'][1];
							$_SESSION['escolha'][$numero] = $letra;
							$_SESSION['letra'] = $letra;

							if (verificavitoria($letra)) {
								$_SESSION['vjogador']++;
								echo "\n<div class='text-center mt-2 mb-2' style='color: black;'>Você ganhou! \(O_O)/ </div>\n";
								echo "<style> #tabela2{ background: black; border-color: black; }\n td > button{ color: black; } td{ border-color: black; }</style>";
								/* constroi a tabela desabilitada */	
								tabela2();
								echo "<style> #tabela1{ display: none; }</style>";
								if ($letra == 'x') {
									$verde = 'black';
								}else{
									$vermelho = 'black';
								}
								/* botão para jogar denovo ou resetar */
								jogaereseta();
							}else{
								/* -------------------- vez da máquina ------------------- */
								/* máquina escolhe uma celula aleatória disponivel */
								//verifica se tem espaço na tabela
								$espaco = false;
								for ($i=0; $i < sizeof($_SESSION['escolha']); $i++) { 
									if ($_SESSION['escolha'][$i] == 'z') {
										$espaco = true;
									}
								}
								//a máquina faz a jogada se tiver espaço na tabela
								if ($espaco) {

									if ($_SESSION['dificuldade'] == 'facil') {
										do{
											$condicao = true;
											$numero = rand(0, 8);
											if ($_SESSION['escolha'][$numero] == 'z') {
												$condicao = false;
											}
										}while ($condicao);
										/* máquina escolhe 'o' se tiver disponivel */
									}else{
										require_once('funcoes/jogadas.php');
									}

									if ($_SESSION['letra'] == 'o') {
										$letra = 'x';
										$_SESSION['escolha'][$numero] = $letra;
									}else {
										$letra = 'o';
										$_SESSION['escolha'][$numero] = $letra;
									}
								}
								if (verificavitoria($letra)) {
									$_SESSION['vmaquina']++;
									echo "\n<div class='text-center mt-2 mb-2' style='color: black;'>A máquina ganhou! \[@_0]/ </div>\n";
									echo "<style> #tabela2{ background: black; border-color: black; }\n td > button{ color: black; } td{ border-color: black; }</style>";
									/* constroi a tabela desabilitada */	
									tabela2();
									echo "<style> #tabela1{ display: none; }</style>";
									if ($letra == 'x') {
										$verde = 'black';
									}else{
										$vermelho = 'black';
									}
									/* botão para jogar denovo ou resetar */
									jogaereseta();
								}else{
									$espaco = false;
									for ($i=0; $i < sizeof($_SESSION['escolha']); $i++) { 
										if ($_SESSION['escolha'][$i] == 'z') {
											$espaco = true;
										}
									}
									if (!$espaco) {
										echo "\n<div class='text-center mt-2 mb-2' style='color: black;'>Deu empate!</div>\n";
										echo "<style> #tabela2{ background: black; border-color: black; }\n td > button{ color: black; } td{ border-color: black; }</style>";
										/* constroi a tabela desabilitada */	
										tabela2();
										echo "<style> #tabela1{ display: none; }</style>";
										/* botão para jogar denovo ou resetar */
										jogaereseta();
									}
								}
								/* -------------------- vez da máquina fim ------------------- */
							}
						}
						/* pinta a tabela */
						pintatabela($vermelho, $verde);
						/* constroi a tabela */	
						tabela($_SESSION['letra']);
						
						/* Exibe o placar */
						placar();
					}
					if ($jogador == 2) {
						/* -------------------- vez da máquina ------------------- */
						/* máquina escolhe uma celula aleatória disponivel */
						do{
							$condicao = true;
							$numero = rand(0, 8);
							if ($_SESSION['escolha'][$numero] == 'z') {
								$condicao = false;
							}
						}while ($condicao);
						/* máquina escolhe 'o' se tiver disponivel */
						if ($_SESSION['letra'] == 'o') {
							$letra = 'x';
							$_SESSION['escolha'][$numero] = $letra;
						}else {
							$letra = 'o';
							$_SESSION['escolha'][$numero] = $letra;
						}		
						/* -------------------- vez da máquina fim ------------------- */
						/* pinta a tabela */
						pintatabela($vermelho, $verde);

						if($letra == 'x'){
							$letra = 'o';
						}else{
							$letra = 'x';
						}
						/* constroi a tabela */	
						tabela($letra);

						/* Exibe o placar */
						placar();
					}
				?>
			</div>
		</div>
</div>
<?php
	//inclui o footer
	require('footer.php');
?>