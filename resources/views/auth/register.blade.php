<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reģistrēties</h1>
    
    @csrf
   
    @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

    <form method="post">
    <label for="first_name">First name:</label>
  <input type="text" name="first_name" required><br><br>
  <label for="last_name">Last name:</label>
  <input type="text" name="last_name" required><br><br>
  <label for="email">email</label>
  <input type="text" name="email" required><br><br>
  <label for="password">password</label>
  <input type="text" name="password" required><br><br>
  <input type="submit" value="Submit">
    </form>
</body>
</html>