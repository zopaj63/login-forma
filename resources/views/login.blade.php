<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login forma</h1>
    <hr>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <label>Email</label>
        <input type="email" name="email" required>
        <br><br>
        <label>Lozinka</label>
        <input type="password" name="password" required>
        <br><br><br>
        <button type="submit" value="Login">Logiraj se</button>
    </form>

</body>
</html>