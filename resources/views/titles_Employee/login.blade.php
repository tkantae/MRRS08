<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/dist/css/login.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>

</head>
<body>
    <div class="main">
        <h1 class="text-3xl font-bold mb-6">Welcome</h1>
        <form action="{{ url('login') }}" class="space-y-4" method="POST">
            @csrf
            <div class="relative py-4">
                <input type="text" name="username" id="username" class="w-full border-300 shadow-sm pl-50 py-1.5">
                <label for="username" class="absolute left-1 top-4 pt-1 pl-3 text-gray-500">Username:</label>
            </div>
            <div class="relative py-4">
                <input type="password" name="password" id="password" class="w-full border-300 shadow-sm pl-50 py-1.5 ">
                <label for="password" class="absolute left-1 top-4 pt-1 pl-3 text-gray-500">Password:</label>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </form>
    </div>

    <script>
        function onclick(){

        }
    </script>
</body>
</html>
