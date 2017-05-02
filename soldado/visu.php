<table border='1'>
			<tr>
				<td>
					MATERIA
				</td>
				<td>
					NOTA 1
				</td>
				<td>
					NOTA 2
				</td>
				<td>
					NOTA 3
				</td>
				<td>
					EDITAR
				</td>
				<td>
					EXCLUIR
				</td>				
			</tr>

			<? 
				$sql_visualizar = mysql_query("SELECT * FROM materias ORDER BY materia");
				while ($linha = mysql_fetch_array($sql_visualizar)) {
					$p_materia = $linha['materia'];
					$p_n1 = $linha['n1'];
					$p_n2 = $linha['n2'];
					$p_n3 = $linha['n3'];
					$id = $linha[´'id'];
			?>
			<tr>
				<td>
					<? echo $p_materia; ?>
				</td>
				<td>
					<? echo $p_n1; ?>
				</td>
				<td>
					<? echo $p_n2; ?>
				</td>
				<td>
					<? echo $p_n3; ?>
				</td>
				<td>
					<a href='cadastrando.php?funcao=editar'> EDITAR</a>
				</td>
				<td>
					<a href='cadastrando.php?funcao=excluir'> EXCLUIR</a>
				</td>
			</tr>
			<?
				}
			?>		
		</table>	