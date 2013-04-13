<h2>Listing Bbs</h2>
<br>
<?php if ($bbs): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Post date</th>
			<th>Message</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($bbs as $bb): ?>		<tr>

			<td><?php echo $bb->post_date; ?></td>
			<td><?php echo $bb->message; ?></td>
			<td>
				<?php echo Html::anchor('bbs/view/'.$bb->id, 'View'); ?> |
				<?php echo Html::anchor('bbs/edit/'.$bb->id, 'Edit'); ?> |
				<?php echo Html::anchor('bbs/delete/'.$bb->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Bbs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('bbs/create', 'Add new Bb', array('class' => 'btn btn-success')); ?>

</p>
