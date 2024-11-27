<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>

<h1>Halo</h1>
<!-- Di click mengarah ke halaman login -->
    <form method="GET" action="{{ route('login') }}">
        @csrf
        <button type="submit">Start Here to Log</button>
    </form>

</body>
</html>
