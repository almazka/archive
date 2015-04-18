<div class="quick-bg">
			<div id="spacer" style="margin-bottom:15px;">
				<div id="rc-bg">Теги:</div>
			</div>
			<?php foreach ($left_bar as $value) { ?>
			<div class='quick-links'>
				<a href='?option=category&id=<?=$value['id']?>'><?=$value['name']?></a>
			</div>
<?php } ?>
</div>