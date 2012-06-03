<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div id="line-<?php echo $bID; ?>outer1" style="display:table; height: <?php echo $height; ?>px;width: 100%">
	<div ="line-<?php echo $bID; ?>outer2" style="display : table-cell;vertical-align: middle;width: 100%"> 
		<div id="line-<?php echo $bID; ?>inner" style="<?php
			echo 'border-bottom:' . $size . 'px ' . $borderstyle . ' '. $color . ';';
			echo ' width:' . $width . '%;';
			echo '">';
		?>
		</div>
	</div>
</div>