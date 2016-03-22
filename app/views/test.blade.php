<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

    {{Form::open(['url' => '/uploadimg', 'method' => 'POST', 'files' => 'true'])}}
        {{Form::file('image')}}
            
            <input type="submit"></input>
            {{Form::close()}}
</body>
</html>