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
  <h2>Vertical (basic) form</h2>
  <form action="{{('/create') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter image" name="image[]" multiple>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>

  </form>
</div>

@if (session('add'))
<div class="alert alert-success">
<?php  
// echo "<script>";
// echo "alert('Profile Added');";
// echo "</script>";
?>
     {{ session('add') }} 
</div>
@endif
<a href="{{url('show')}}"><button type="submit"  class="btn btn-default">show</button></a>

</body>
</html>
