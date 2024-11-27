<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css'])
</head>

<body>

    <div class="box-wrapper">
        <div class="container wrapper">
            <div class="row">
                <div class="col left">
                    <img src="{{ asset('images/logo.png') }}" alt="Your Image">

                </div>
                <div class="col right">
                    <h1>Welcome To Reddit</h1>
                    <h5>Connect To The World</h5>
                    <br>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="usernameInput">Username</label>
                            <input type="text" class="form-control" name="username" id="usernameInput" placeholder="Enter Username" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

                <!-- Error Handling -->
                @if ($errors->any())
                <div class="container">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif


            </div>
        </div>
    </div>


</body>

</html>