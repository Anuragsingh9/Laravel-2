<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" style="background-color: yellow">
    <div class="col-mg-4" style="display:flex;">
    <li><a href="{{ url('local/en') }}" ><i class="fa fa-language"></i>1. ENGLISh</a></li>

    <li><a href="{{ url('local/hi') }}" ><i class="fa fa-language"></i>2. HINDI</a></li>
    <li><a href="{{ url('local/fr') }}" ><i class="fa fa-language"></i>3. FRENCH</a></li>
</div>
</div>
<h1> {{__('msg.welcome')}}</h1>
   
    
</body>
</html>