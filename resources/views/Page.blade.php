<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel first page</title>
</head>
<body>
    <form action="/homePage" method="POST">
        @csrf
        <input type="text" name="username"/>
        <input type="text" name="password"/>
        <button>submit</button>
    </form>
</body>
</html>