<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <h1>Welcome to the Dashboard!</h1>
    <p>You are logged in as {{ session('username') }}.</p>


    <!-- Di click dapat untuk logout -->

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>

</html>
