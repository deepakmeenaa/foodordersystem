<fieldset>
	<legend>create account details</legend>
<form action="<?php echo e(action('restaurantscontroller@store')); ?>"method="post"><?php echo csrf_field(); ?>
	<input type="text" name="name" placeholder="enter your name here"><br><br><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	<div>
		<?php echo e($message); ?>

	</div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	<input type="text" name="email" placeholder="enter your Email"><br><br><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	<div>
		<?php echo e($message); ?>

	</div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	<input type="text" name="contact" placeholder="enter your mobile no."><br><br><?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	<div>
		<?php echo e($message); ?>

	</div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	<input type="text" name="address" placeholder="enter subject"><br><br><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	<div>
		<?php echo e($message); ?>

	</div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	<input type="text" name="M_ID" placeholder="enter manager id "><br><br><?php $__errorArgs = ['M_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	<div>
		<?php echo e($message); ?>

	</div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</textarea><br><br>
	<input type="submit" name="submit" value="Add">
</form>
</fieldset><?php /**PATH C:\xampp\htdocs\deepakmvc\resources\views/restaurants/create.blade.php ENDPATH**/ ?>