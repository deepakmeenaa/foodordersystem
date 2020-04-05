<fieldset>
	<legend>create account details</legend>
<form action="<?php echo e(action('contactcontroller@store')); ?>"method="post"><?php echo csrf_field(); ?>
	<input type="text" name="Name" placeholder="enter your name here"><br><br><?php $__errorArgs = ['Name'];
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
	<input type="text" name="Email" placeholder="enter your Email"><br><br><?php $__errorArgs = ['Email'];
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
	<input type="text" name="Mobile" placeholder="enter your mobile no."><br><br><?php $__errorArgs = ['Mobile'];
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
	<input type="text" name="Subject" placeholder="enter subject"><br><br><?php $__errorArgs = ['Subject'];
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
	<textarea name="Message" rows="5" cols="40" placeholder="enter your message"><?php $__errorArgs = ['Message'];
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
</fieldset><?php /**PATH C:\xampp\htdocs\deepakmvc\resources\views/contact/create.blade.php ENDPATH**/ ?>