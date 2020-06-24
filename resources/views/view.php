<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
    <title>India_Corona_Info</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">State Code</th>
      <th scope="col">Name</th>
      <th scope="col">Active</th>
      <th scope="col">confirmed</th>
      <th scope="col">recovered</th>
      <th scope="col">deaths</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($totaldata as $item)
      <th scope="row">{{$item ['id']}}</th>
      <td>{{$item ['state']}}</td>
      <td>{{$item ['active']}}</td>
      <td>{{$item ['confirmed']}}</td>
      <td>{{$item ['recovered']}}</td>
      <td>{{$item ['deaths']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="alert alert-success">
  <strong>Success!</strong>.
</div>
    <h1>Corona Information</h1>
    <h1>India</h1>
    <h2>TotalCase:{{$totalcase['confirmed']}}</h2>
    <h2>Total Active:{{$totalcase['active']}}</h2>
    <h2>Total recovered:{{$totalcase['recovered']}}</h2>
    <h2>Total deaths:{{$totalcase['deaths']}}</h2>

<!-- 
@foreach($totaldata as $item)
<br><h3>
<li>State Code: {{$item ['id']}}</li></h3>
<li>State Name: {{$item ['state']}}</li>
<li>Active : {{$item ['active']}}</li>
<li>confirmed : {{$item ['confirmed']}}</li>
<li>recovered: {{$item ['recovered']}}</li>
<li>deaths: {{$item ['deaths']}}</li>
{{--    For get an array data I used another loop for tha data retrive--}}
    @foreach($item['districtData'] as $dis)
        District Name: {{$dis['name']}} </br>
        District confirmed: {{$dis['confirmed']}} </br>
        District recovered: {{$dis['recovered']}} </br>
        District deaths: {{$dis['deaths']}} </br>
        District zone: {{$dis['zone']}} </br>

    @endforeach
@endforeach -->
</ul>
</body>
</html>
