<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display school</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Address</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">contact</th>
      <th scope="col">email</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($school as $s)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$s->name}}</td>
      <td>{{$s->address}}</td>
      <td>{{$s->city}}</td>
      <td>{{$s->state}}</td>
      <td>{{$s->contact}}</td>
      <td>{{$s->email}}</td>
      <td><img src="{{ url('/upload/school_image/'.$s->image) }}" style="height: 100px; width: 100px; border-radius: 100%;"></td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>
