<!DOCTYPE html>
<html>
<head>
	<title>upload file</title>
</head>
<body>
<form action="upload2" method="post"enctype="multipart/form-data"><?php echo csrf_field(); ?>
	<input type="file" name="user_img"/><br><br>
	<button type="submit">upload files</button>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\deepakmvc\resources\views/fileupload.blade.php ENDPATH**/ ?>