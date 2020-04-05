<fieldset>
	<legend>create account details</legend>
<form action="{{action('managercontroller@store')}}"method="post">@csrf
	<input type="text" name="username" placeholder="enter your name here"><br><br>@error('username')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="fullname" placeholder="enter your fullname"><br><br>@error('fullname')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="email" placeholder="enter your email"><br><br>@error('email')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="contact" placeholder="enter your mobile no."><br><br>@error('contact')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="address" placeholder="enter your address"><br><br>@error('address')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="password" placeholder="enter your password"><br><br>@error('password')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="submit" name="submit" value="Add">
</form>
</fieldset>