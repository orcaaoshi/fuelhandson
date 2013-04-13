<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Post date', 'post_date'); ?>

			<div class="input">
				<?php echo Form::input('post_date', Input::post('post_date', isset($bb) ? $bb->post_date : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Message', 'message'); ?>

			<div class="input">
				<?php echo Form::input('message', Input::post('message', isset($bb) ? $bb->message : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>