<?php  if (count($errors) > 0): ?>
	<span class="error">
		<?php foreach ($errors as $error): ?>
			<?php echo $error ?>
		<?php endforeach ?>
	</span>
<?php  endif ?>
