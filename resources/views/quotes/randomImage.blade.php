<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Styles -->
  <style>
  html, body {
    background-image: url('https://images.wallpaperscraft.com/image/texture_spots_purple_130336_1920x1080.jpg');
    background-size: cover;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .content {
    text-align: center;
    margin-left: 3vw;
    margin-right: 3vw;
  }

  .title {
    color: white;
    font-size: 7vw;
  }
  .author {
    font-size: 3vw;
    color: #E8E8E8;
  }

  .refresh{
    color: white;
    font-size: 3vw;
    position: absolute;
    right: 10px;
    top: 18px;
  }

  </style>
</head>
<body>
  <div class="flex-center position-ref full-height">
    <div class="content ">
      <img src="{{ $data['url'] }}"/>
      <h1 style="color:white">{{ $data['server-ip'] }}</h1>
      <div class="refresh">
        <a class="glyphicon glyphicon-refresh refresh" href="{{ route('random-image') }}"></a>
      </div>
    </div>
  </div>
</body>
</html>
