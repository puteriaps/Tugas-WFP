<!DOCTYPE html>
<html lang="en">
<head>
  <title>List medicines by category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Medicines by Category</h2>   
  <p>ID Category: {{$id_category}} with name: {{$namecategory}}</p>        
  <br>
  <p>Total Rows: {{$getTotalData}}</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Generic Name</th>
        <th>Medicines Form</th>
        <th>Restriction Formula</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach($result as $res)
        <tr>
            <td>{{ $res -> generic_name}}</td>
            <td>{{ $res -> medicines_form}}</td>
            <td>{{ $res -> restriction_formula}}</td>
            <td>{{ $res -> price}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
