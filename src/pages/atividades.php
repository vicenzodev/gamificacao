<?php
	$atv = Atividades::getAtv();
?>
<div class="container">
	<div class="map">
		<?php foreach($atv as $key => $content){?>
			<a href="fazer_atividade?atv=<?php echo $content['id'];?>">
				<div class="atv">
					<h2 class="titulo"><?php echo $content['nome']?></h2>
				</div><!--atv-->
			</a>
		<?php }?>
	</div><!--map-->
</div><!--container-->