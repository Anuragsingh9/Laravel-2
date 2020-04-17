<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="/index"><button class="btn btn-success">Show</button></a>
    <form method="post" action="{{url('submitForm')}}">
        {{csrf_field()}}
        <div class="form-group"> <!-- Full Name -->
          <label for="full_name_id" class="control-label">Full Name</label>
          <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="Enter name">
        </div>
    
        <div class="form-group"> <!-- Street 1 -->
          <label for="street1_id" class="control-label">Street Address 1</label>
          <input type="text" class="form-control" id="street1_id" name="street_address" placeholder="Enter Address">
        </div>
    
        <div class="form-group"> <!-- City-->
          <label for="city_id" class="control-label">City</label>
          <input type="text" class="form-control" id="city_id" name="city" placeholder="Enter city">
        </div>
    
        <div class="form-group"> <!-- Zip Code-->
          <label for="zip_id" class="control-label">Zip Code</label>
          <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
        </div>
    
        <div class="form-group"> <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Buy!</button>
        </div>
    
        </form>
    </div>
</body>
</html>