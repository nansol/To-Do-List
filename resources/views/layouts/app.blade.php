<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title class="text-center" >To Do List</title>
</head>
<body>
    @include('include.navbar')
    <div class="container">
    @include('include.messages')

        @yield('content')

    </div>

    <footer id="footer" class="text-center">
        <p>Copy &copy 2019 NanSol</p>
    </footer>

</body>
</html>
