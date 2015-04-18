<div id="bottom">
	<div class="toplinks" style="padding-left:127px;">
		<a href="?option=main">Главная</a></div>
		<?php foreach ($footer as $value) { ?>
			<div class='sap2'>::</div><div class='toplinks'><a href='?option=menu&id=<?=$value['id']?>'><?=$value['name']?></a></div>
			<?php } ?>
</div>
<div class='copy'>
	<span class='style1'>&copy; SuperWebmaster,  <?=date(Y)?></span>
</div>
</div>
</center></body></html>