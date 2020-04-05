<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<?php $__env->startSection('header'); ?>
<div class="header">
	<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<h1>
		header part
	</h1>
</div>
<?php echo $__env->yieldSection(); ?>
<div class="content">
	<?php echo $__env->yieldContent('content'); ?>
</div>
<?php $__env->startSection('footer'); ?>
<div class="footer">
<h1>
	footer part
</h1>
</div>
<?php echo $__env->yieldSection(); ?>	
</body>
<style>
	.header{
		padding:20px;
		background-color: antiquewhite;
		text-align: center;
	}
	.footer{
		padding: 20px;
		background-color: antiquewhite;
		text-align: center;
		position: absolute;
		bottom: 0;
		width: 100%;
	}
	.content{
		height: 500px;
		padding: 20px;
		background-color: #b2a3b9;
		text-align: center;
			}
		</style>
</html><?php /**PATH C:\xampp\htdocs\deepakmvc\resources\views/layout.blade.php ENDPATH**/ ?>