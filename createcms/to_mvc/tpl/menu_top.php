<div id="mainarea">
			<div class="heading">
				<div class="toplinks" style="padding-left:30px;"><a href="?option=main">Главная</a></div>
			<?php foreach ($menu_top as $value) { ?>
				<div class='sap2'>::</div>
				<div class='toplinks'><a href='?option=menu&id=<?=$value['id']?>'><?=$value['name']?></a></div>
			<?php } ?>
		</div>