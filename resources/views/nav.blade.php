<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servirce Providers</title>
</head>
<body>
    <div class="links">

        <a href="">HOme</a><br>
        {{-- {{dd($pages)}} --}}
    {{-- <a href="">{{$TEST}}</a> --}}
    @foreach ($pages as $page)

    <a href="/{{$page->slug}}">{{$page->name}}</a>
        
    @endforeach
    </div>
    
</body>
</html>