<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/login" method="post">
        @csrf

        <input type="text" name="name" ><br><br>
        <input type="password" name="pwd" >
        <input type="submit" value="submit"><br><br>

    </form>
    
</body>
</html>