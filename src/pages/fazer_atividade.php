<form method="post">
<?php
	if(isset($_POST['acao'])){
		echo "<script>alert('Formulário inserido com sucesso :)')</script>";
		$acerto = 0;
		for($i = 1;$i<$_POST['qnt']+1;$i++){
			if($_POST[$i] == 1)$acerto++;
		}
		echo $acerto;
		$acerto = $acerto*100/$_POST['qnt'];
		echo "Você acertou: ".$acerto."% da prova";
	}
	if(isset($_GET['atv']) && @$_GET['atv'] != ""){
		$sql = MySql::conect()->prepare("SELECT * FROM `questoes` WHERE fk_atividade = ?");
		$sql->execute(array($_GET['atv']));
		$questoes = $sql->fetchAll();
		foreach($questoes as $key => $content){
			$sql = MySql::conect()->prepare("SELECT * FROM `alternativas` WHERE fk_questao = ?");
			$sql->execute(array($content['id']));
			$alt = $sql->fetchAll();?>
	<h2><?php echo ($key+1).". ".$content['enunciado'];?></h2> 
<?php 		foreach($alt as $keyAlt => $contentAlt){?>
			<input type="radio" name="<?php echo $content['id']?>" value="<?php echo $contentAlt['correta']?>"><label><?php echo $contentAlt['descricao'];?></label>
<?php }?>
<?php }?>
	<input type="submit" name="acao">
	<input type="hidden" name="qnt" value="<?php echo count($questoes);?>">
<?php }else{echo "<script>alert('Não foi inserida chave da atividade :(')</script>";}?>
</form>