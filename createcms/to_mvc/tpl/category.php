<div id="main">
<?php <foreach ($content as $value) { ?>
		<div style='margin:10px;border-bottom:2px solid #c2c2c2'>
			<p style='font-size:18px'><?=$value['title']?></p>
			<p><?=$value['date']?></p>
			<p><img style='margin-right:5px;' width='150px' align='left' src='<?=$value['img_src']?>'><?=$value['description']?></p>
			<p style='color:red'><a href='?option=view&id=<?=$value['id']?>'>Читать далее...</a></p>
		</div>
		<?php } ?>
	</div>
</div>