<fieldset>
	<legend>create account details</legend>
<form action="{{action('restaurantscontroller@store')}}"method="post">@csrf
	<input type="text" name="name" placeholder="enter your name here"><br><br>@error('name')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="email" placeholder="enter your Email"><br><br>@error('email')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="contact" placeholder="enter your mobile no."><br><br>@error('contact')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="address" placeholder="enter subject"><br><br>@error('address')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="M_ID" placeholder="enter manager id "><br><br>@error('M_ID')
	<div>
		{{$message}}
	</div>
@enderror
</textarea><br><br>
	<input type="submit" name="submit" value="Add">
</form>
</fieldset>