<?php
	/**
	 * 
	 */
	class Atividades{
		
		public $nome;
		public $pontuacao = 0;
		public $qntQuestoes;
		public $xp;
		function __construct($nome,$qntQuestoes,$xp){
			$this->xp = $xp;
			$this->nome = $nome;
			$this->qntQuestoes = $qntQuestoes;
			$sql = MySql::conect()->prepare("INSERT INTO `atividades` VALUES (null,?,?,?,?)");
			$sql->execute(array($nome,$this->pontuacao,$qntQuestoes,$xp));
		}

		static function getAtv(){
			$atv = MySql::conect()->prepare("SELECT * FROM `atividades`");
			$atv->execute();
			return $atv = $atv->fetchAll();
		}
	}
?>