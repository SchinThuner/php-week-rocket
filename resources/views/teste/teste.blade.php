<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TESTE</title>
</head>
<body>
  @auth
    Você está autenticado!
  @endauth
  @foreach (range(1, 20) as $key)
    <li>{{ $key }}</li>
  @endforeach
</body>
</html>