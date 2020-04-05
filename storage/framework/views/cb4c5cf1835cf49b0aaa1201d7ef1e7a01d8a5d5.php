<fieldset>
	<legend>create account details</legend>
<form action="<?php echo e(action('foodcontroller@store')); ?>"method="post"><?php echo csrf_field(); ?>
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
	<input type="text" name="price" placeholder="enter price"><br><br><?php $__errorArgs = ['price'];
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
	<input type="text" name="description" placeholder="enter description"><br><br><?php $__errorArgs = ['description'];
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
	<input type="number" name="R_ID" placeholder="enter R_ID"><br><br><?php $__errorArgs = ['R_ID'];
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
	<input type="file" name="images_path"><br><br><?php $__errorArgs = ['images_path'];
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
	<input type="submit" name="submit" value="Add">
</form>
</fieldset><?php /**PATH C:\xampp\htdocs\deepakmvc\resources\views/food/create.blade.php ENDPATH**/ ?>