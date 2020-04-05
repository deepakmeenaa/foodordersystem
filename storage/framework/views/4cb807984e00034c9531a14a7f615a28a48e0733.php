<!DOCTYPE html>
<html>
<head>
<style>
	.page-item{
		display: inline-block;
		padding: 10px;
	}
</style>
</head>
<body>
	<div>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li> <?php echo e($item->name); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div>
	<?php echo e($data->links()); ?>

</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\deepakmvc\resources\views/page.blade.php ENDPATH**/ ?>