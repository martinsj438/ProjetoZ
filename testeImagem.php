<?php
	$conexao = new mysqli("localhost", "root", "", "banco");
	if($conexao->error)
		die();

	$cont = 0;
	$sql = "SELECT * FROM produtos2";
	$resultado = $conexao->query($sql);
	while($campo = $resultado->fetch_assoc())
	{
		if($cont < 3)
		{
			// <div class="col-md-4>"

			echo $campo["descricao"];
			$cont++;

			// </div> <!--fechar div md 4 -->
		}
		else
		{
			echo "<br>";

			// </div> <!--fechar div row -->

			// </div> <!--fechar div md 4 -->

			echo $campo["descricao"];
			$cont = 1;

			// </div> <!--fechar div md 4 -->
		}
		// </div> <!--fechar última div row -->

		// </div> <!--fechar div container -->
	}
	
?>