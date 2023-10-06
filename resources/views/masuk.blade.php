<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk</title>
</head>
<body>
    <h1>Masuk</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input">
            
        </div>
    </form>
</body>
</html>