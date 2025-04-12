<?php
	if(isset($_POST['acao'])){
		$atv = new Atividades($_POST['nome'],$_POST['qntQuest'],$_POST['xp']);
	}
?>
<div class="container">
	<form method="post">
		<div class="form-container">
			<label>Nome: </label>
			<input type="text" name="nome" required>
		</div>
		<div class="form-container">
			<label>Quantidade de questões: </label>
			<input type="number" name="qntQuest" min="1" max="99" required>
		</div>
		<div class="form-container">
			<label>Quantidade de XP: </label>
			<input type="number" name="xp" min="0" max="100000" required>
		</div>
		<div class="form-container">
			<input type="submit" name="acao">
		</div>
	</form>
</div>