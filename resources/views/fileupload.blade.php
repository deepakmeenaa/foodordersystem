<!DOCTYPE html>
<html>
<head>
	<title>upload file</title>
</head>
<body>
<form action="upload2" method="post"enctype="multipart/form-data">@csrf
	<input type="file" name="user_img"/><br><br>
	<button type="submit">upload files</button>
</form>
</body>
</html>