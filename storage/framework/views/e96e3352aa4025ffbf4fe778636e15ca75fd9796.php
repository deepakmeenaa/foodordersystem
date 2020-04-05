<h1>hello from view</h1>
<?php
print_r($data);
?>
<?php echo e($data['name']); ?>

<div>
	<?php if($data['name']=='an'): ?>
	hi this is me
	<?php elseif($data['name']=='abc'): ?>
	hi this is my friend
	<?php else: ?>
	hi,new user
	<?php endif; ?>
</div>
<div>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo $i; ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\xampp\htdocs\deepakmvc\resources\views/user.blade.php ENDPATH**/ ?>