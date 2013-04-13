<h2>Editing Bb</h2>
<br>

<?php echo render('bbs/_form'); ?>
<p>
	<?php echo Html::anchor('bbs/view/'.$bb->id, 'View'); ?> |
	<?php echo Html::anchor('bbs', 'Back'); ?></p>
