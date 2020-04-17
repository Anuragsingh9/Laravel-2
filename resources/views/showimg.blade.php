<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>img</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($image as $images)
            
      <tr>
        <td>{{$images->id}}</td>
        <td><img class="card-img-top" src="{{url('uploads/'.$images->filename)}}" height="80px" width="80px" alt="{{$images->filename}}"></td>
      <td><button class="btn btn-info"><a href="/update/{{$images->id}}">Change Image</a></button></td>
      <td><button class="btn btn-warning"><a href="/download/{{$images->filename}}">Download</a></button></td>

    </tr>      
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>

