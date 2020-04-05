<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
@section('header')
<div class="header">
	@include('nav')
	<h1>
		header part
	</h1>
</div>
@show
<div class="content">
	@yield('content')
</div>
@section('footer')
<div class="footer">
<h1>
	footer part
</h1>
</div>
@show	
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
</html>