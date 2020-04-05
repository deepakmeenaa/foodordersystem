<fieldset>
	<legend>create account details</legend>
<form action="{{action('contactcontroller@store')}}"method="post">@csrf
	<input type="text" name="Name" placeholder="enter your name here"><br><br>@error('Name')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="Email" placeholder="enter your Email"><br><br>@error('Email')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="Mobile" placeholder="enter your mobile no."><br><br>@error('Mobile')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="Subject" placeholder="enter subject"><br><br>@error('Subject')
	<div>
		{{$message}}
	</div>
@enderror
	<textarea name="Message" rows="5" cols="40" placeholder="enter your message">@error('Message')
	<div>
		{{$message}}
	</div>
@enderror
</textarea><br><br>
	<input type="submit" name="submit" value="Add">
</form>
</fieldset>