<?php
//----- melhores jogadas para a máquina ------
									//diagonal máquina ataque
									if ($_SESSION['escolha'][0] == 'o' && $_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][8] == 'z') {
										$numero = 8;
									}else if ($_SESSION['escolha'][8] == 'o' && $_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][0] == 'z') {
										$numero = 0;
									}else if ($_SESSION['escolha'][2] == 'o' && $_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][6] == 'z') {
										$numero = 6;
									}else if ($_SESSION['escolha'][6] == 'o' && $_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][2] == 'z') {
										$numero = 2;
										//horizontal
									}else if ($_SESSION['escolha'][0] == 'o' && $_SESSION['escolha'][1] == 'o' && $_SESSION['escolha'][2] == 'z') {
										$numero = 2;
									}else if ($_SESSION['escolha'][0] == 'o' && $_SESSION['escolha'][2] == 'o' && $_SESSION['escolha'][1] == 'z') {
										$numero = 1;
									}else if ($_SESSION['escolha'][3] == 'o' && $_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][5] == 'z') {
										$numero = 5;
									}
									else if ($_SESSION['escolha'][6] == 'o' && $_SESSION['escolha'][7] == 'o' && $_SESSION['escolha'][8] == 'z') {
										$numero = 8;
									}else if ($_SESSION['escolha'][6] == 'o' && $_SESSION['escolha'][8] == 'o' && $_SESSION['escolha'][7] == 'z') {
										$numero = 7;
									}else if ($_SESSION['escolha'][1] == 'o' && $_SESSION['escolha'][2] == 'o' && $_SESSION['escolha'][0] == 'z') {
										$numero = 0;
									}
									else if ($_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][5] == 'o' && $_SESSION['escolha'][3] == 'z') {
										$numero = 3;
									}else if ($_SESSION['escolha'][7] == 'o' && $_SESSION['escolha'][8] == 'o' && $_SESSION['escolha'][6] == 'z') {
										$numero = 6;
										//vertical
									}else if ($_SESSION['escolha'][0] == 'o' && $_SESSION['escolha'][3] == 'o' && $_SESSION['escolha'][6] == 'z') {
										$numero = 6;
									}else if ($_SESSION['escolha'][0] == 'o' && $_SESSION['escolha'][6] == 'o' && $_SESSION['escolha'][3] == 'z') {
										$numero = 3;
									}else if ($_SESSION['escolha'][1] == 'o' && $_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][7] == 'z') {
										$numero = 7;
									}else if ($_SESSION['escolha'][0] == 'o' && $_SESSION['escolha'][1] == 'o' && $_SESSION['escolha'][2] == 'z') {
										$numero = 2;
									}else if ($_SESSION['escolha'][2] == 'o' && $_SESSION['escolha'][8] == 'o' && $_SESSION['escolha'][5] == 'z') {
										$numero = 5;
									}else if ($_SESSION['escolha'][3] == 'o' && $_SESSION['escolha'][6] == 'o' && $_SESSION['escolha'][0] == 'z') {
										$numero = 0;
									}else if ($_SESSION['escolha'][4] == 'o' && $_SESSION['escolha'][7] == 'o' && $_SESSION['escolha'][1] == 'z') {
										$numero = 1;
									}else if ($_SESSION['escolha'][5] == 'o' && $_SESSION['escolha'][8] == 'o' && $_SESSION['escolha'][2] == 'z') {
										$numero = 2;
										//dividir1
										//diagonal máquina ataque
									}else if($_SESSION['escolha'][0] == 'x' && $_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][8] == 'z') {
										$numero = 8;
									}else if ($_SESSION['escolha'][8] == 'x' && $_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][0] == 'z') {
										$numero = 0;
									}else if ($_SESSION['escolha'][2] == 'x' && $_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][6] == 'z') {
										$numero = 6;
									}else if ($_SESSION['escolha'][6] == 'x' && $_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][2] == 'z') {
										$numero = 2;
										//horizontal
									}else if ($_SESSION['escolha'][0] == 'x' && $_SESSION['escolha'][1] == 'x' && $_SESSION['escolha'][2] == 'z') {
										$numero = 2;
									}else if ($_SESSION['escolha'][3] == 'x' && $_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][5] == 'z') {
										$numero = 5;
									}
									else if ($_SESSION['escolha'][6] == 'x' && $_SESSION['escolha'][7] == 'x' && $_SESSION['escolha'][8] == 'z') {
										$numero = 8;
									}else if ($_SESSION['escolha'][1] == 'x' && $_SESSION['escolha'][2] == 'x' && $_SESSION['escolha'][0] == 'z') {
										$numero = 0;
									}
									else if ($_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][5] == 'x' && $_SESSION['escolha'][3] == 'z') {
										$numero = 3;
									}
									else if ($_SESSION['escolha'][7] == 'x' && $_SESSION['escolha'][8] == 'x' && $_SESSION['escolha'][6] == 'z') {
										$numero = 6;
										//vertical
									}else if ($_SESSION['escolha'][0] == 'x' && $_SESSION['escolha'][3] == 'x' && $_SESSION['escolha'][6] == 'z') {
										$numero = 6;
									}else if ($_SESSION['escolha'][1] == 'x' && $_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][7] == 'z') {
										$numero = 7;
									}else if ($_SESSION['escolha'][2] == 'x' && $_SESSION['escolha'][5] == 'x' && $_SESSION['escolha'][8] == 'z') {
										$numero = 8;
									}else if ($_SESSION['escolha'][3] == 'x' && $_SESSION['escolha'][6] == 'x' && $_SESSION['escolha'][0] == 'z') {
										$numero = 0;
									}else if ($_SESSION['escolha'][4] == 'x' && $_SESSION['escolha'][7] == 'x' && $_SESSION['escolha'][1] == 'z') {
										$numero = 1;
									}else if ($_SESSION['escolha'][5] == 'x' && $_SESSION['escolha'][8] == 'x' && $_SESSION['escolha'][2] == 'z') {
										$numero = 2;
										//dividir2
									}else if($_SESSION['escolha'][4] == 'z') {
										$numero = 4;
									}else if ($_SESSION['escolha'][8] == 'z') {
										$numero = 8;
									}else if ($_SESSION['escolha'][0] == 'z') {
										$numero = 0;
									}
									else if ($_SESSION['escolha'][2] == 'z') {
										$numero = 2;
									}else if ($_SESSION['escolha'][1] == 'z') {
										$numero = 1;
									}else if ($_SESSION['escolha'][6] == 'z') {
										$numero = 6;
									}
									else if ($_SESSION['escolha'][7] == 'z') {
										$numero = 7;
									}
									else if ($_SESSION['escolha'][3] == 'z') {
										$numero = 3;
									}
									else if ($_SESSION['escolha'][5] == 'z') {
										$numero = 5;
									}
?>