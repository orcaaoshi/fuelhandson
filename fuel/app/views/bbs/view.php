<h2>Viewing #<?php echo $bb->id; ?></h2>

<p>
	<strong>Post date:</strong>
	<?php echo $bb->post_date; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $bb->message; ?></p>

<?php echo Html::anchor('bbs/edit/'.$bb->id, 'Edit'); ?> |
<?php echo Html::anchor('bbs', 'Back'); ?>