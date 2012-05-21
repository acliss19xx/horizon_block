<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	線の種類
	<?php 
	$options = array(
		'solid' => '実線',
		'dotted' => '点線',
		'dashed' => '破線',
		'double' => '二重線',
	);
	echo $form->select('borderstyle', $options, $borderstyle);
	?>
</div>

<div class="ccm-block-field-group">
	長さ
	<?php 
	$options = array(
		'100' => '100',
		'90' => '90',
		'70' => '70',
		'50' => '50',
		'30' => '30',
		'10' => '10',
	);
	echo $form->select('width', $options, $width);
	?>%
</div>



<div class="ccm-block-field-group">
	太さ
	<?php 
	$options = array(
		'1' => '1',
		'2' => '2',
		'6' => '6',
		'8' => '8',
		'10' => '10',
	);
	echo $form->select('size', $options, $size);
	?>px
</div>

<div class="ccm-block-field-group">
	色
	<?php 
	$options = array(
		'black' => '黒',
		'blue' => '青',
		'red' => '赤',
		'yellow' => '黄',
	);
	echo $form->select('color', $options, $color);
	?>
</div>

<div class="ccm-block-field-group">
	高さ
	<?php 
	$options = array(
		'1' => '1',
		'5' => '5',
		'10' => '10',
		'15' => '15',
		'20' => '20',
	);
	echo $form->select('height', $options, $height);
	?>px
</div>
