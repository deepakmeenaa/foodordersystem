<fieldset>
	<legend>create account details</legend>
<form action="{{action('foodcontroller@store')}}"method="post">@csrf
	<input type="text" name="name" placeholder="enter your name here"><br><br>@error('name')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="price" placeholder="enter price"><br><br>@error('price')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="text" name="description" placeholder="enter description"><br><br>@error('description')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="number" name="R_ID" placeholder="enter R_ID"><br><br>@error('R_ID')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="file" name="images_path"><br><br>@error('images_path')
	<div>
		{{$message}}
	</div>
@enderror
	<input type="submit" name="submit" value="Add">
</form>
</fieldset>