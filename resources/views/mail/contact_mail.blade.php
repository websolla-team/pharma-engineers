<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Hello METC Team !!!</h2>
    <p>You have new message from {{ $formData['name'] }}</p>
    <p>His email is {{ $formData['email'] }}</p>
    <br>
    <p>-------- His message ------------</p>
    <div>{{ $formData['message'] }}</div>
</body>

</html>
