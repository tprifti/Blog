
{{Form::open(['url' => 'admin/login'])}}
<h1>ADMIN Login </h1>
{{Form::label('username', 'Username')}}
{{Form::text('username')}}
{{Form::label('password', 'Password')}}
{{Form::password('password')}}
{{Form::submit('Login')}}
{{$errors->first()}}

{{Form::close()}}