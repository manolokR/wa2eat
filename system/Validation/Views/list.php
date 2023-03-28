<?php if (! empty($errors)) : ?>
	<div class="errors" role="alert">
		<ul>
		<?php foreach ($errors as $error) : ?>
			<?php if (strpos($error, 'is_unique') !== true) : ?>
				<b style="color:red;" >Ese correo ya está en uso</b>
			<?php else: ?>
				<li><?= esc($error) ?></li>
			<?php endif; ?>
		<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>
