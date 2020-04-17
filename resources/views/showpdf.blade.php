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
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Full Name</th>
      <th>Address</th>
      <th>City</th>
      <th>Zip Code</th>
      <th>Action</th>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->full_name}}</td>
        <td>{{$user->street_address}}</td>
        <td>{{$user->city}}</td>
        <td>{{$user->zip_code}}</td>
        <td><a href="{{action('pdfmakerController@downloadPDF', $user->id)}}">Create PDF</a></td>
        <td><a href="{{action('pdfmakerController@downloadZip', $user->id)}}">Create Zip</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>


