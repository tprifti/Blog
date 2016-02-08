
{{Form::open(['url' => 'login'])}}
<h1>User Login </h1>
{{Form::label('username', 'Username')}}
{{Form::text('username')}}
{{Form::label('password', 'Password')}}
{{Form::password('password')}}
{{Form::submit('Login')}}
{{$errors->first()}}

{{Form::close()}}